<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\Facades\Http;

class MpesaServiceProvider 
{
    
    private $api_key;
    private $public_key;
    private $address = 'api.sandbox.vm.co.mz';
    private $port = 18352;
    private $transaction_reference;
    private $customer_msisdn;
    private $amount;
    private $service_provider_code = '171717';
    private $http_status;
    private $response;
    private $errors = [];

    public function __construct( int $customer_msisdn, int $amount) {
        $this->customer_msisdn = $customer_msisdn;
        $this->amount = $amount;
    }

    public function generateTransactionReference( int $transaction_reference_size ) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
    
        $max = strlen($characters) - 1;
    
        for ($i = 0; $i < $transaction_reference_size; $i++) {
            $code .= $characters[mt_rand(0, $max)];
        }
    
        $this->transaction_reference = $code;
    }

    private function apiContext() {
        return [
            'api_key' => $this->api_key,
            'public_key' => $this->public_key,
            'ssl' => true,
            'method_type' => 'POST',
            'address' => $this->address,
            'port' => $this->port,
            'path' => '/ipg/v1x/c2bPayment/singleStage/',
            'headers' => [
                'Origin' => '*',
                'Content-Type' => 'application/json',
                'Authorization' => $this->getBearerToken()
            ],
            'parameters' => [
                'input_TransactionReference' => $this->transaction_reference,
                'input_CustomerMSISDN' => $this->customer_msisdn,
                'input_Amount' => $this->amount,
                'input_ThirdPartyReference' => '111PA2D',
                'input_ServiceProviderCode' => $this->service_provider_code,
            ],
        ];
    }

    public function send() {
        $api_context = $this->apiContext();

        $response = Http::withHeaders($api_context['headers'])
            ->post("https://{$api_context['address']}:{$api_context['port']}{$api_context['path']}", $api_context['parameters']);
        
        $this->http_status = $response->status();

        $response_body = $response->body();
        $response = json_decode($response_body);

        $this->response = get_object_vars($response);
    }

    public function getBearerToken(): string
    {
        $publickey = "-----BEGIN PUBLIC KEY-----\n";
        $publickey .= str_replace(["\r", "\n"], '', $this->public_key);
        $publickey .= "\n-----END PUBLIC KEY-----";

        $key = openssl_get_publickey($publickey);

        if (!$key) {
            $error = openssl_error_string();
            $this->errors[] = $error;
            throw new Exception($error);
        }

        $encrypted = '';
        $result = openssl_public_encrypt($this->api_key, $encrypted, $key, OPENSSL_PKCS1_PADDING);

        if (!$result) {
            $error = openssl_error_string();
            $this->errors[] = $error;
            throw new Exception($error);
        }

        return 'Bearer ' . base64_encode($encrypted);
    }

    public function getApiKey() {
        return $this->api_key;
    }

    public function setApiKey( string $api_key ) {
        $this->api_key = $api_key;
    }

    public function getPublicKey() {
        return $this->public_key;
    }

    public function setPublicKey( string $public_key ) {
        $this->public_key = $public_key;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress( string $address ) {
        $this->address = $address;
    }

    public function getPort() {
        return $this->port;
    }

    public function setPort( int $port ) {
        $this->port = $port;
    }

    public function getTransactionReference() {
        return $this->transaction_reference;
    }

    public function setTransactionReference( string $transaction_reference ) {
        $this->transaction_reference = $transaction_reference;
    }

    public function getCustomerMsisdn() {
        return $this->customer_msisdn;
    }

    public function setCustomerMsisdn( string $customer_msisdn ) {
        $this->customer_msisdn = $customer_msisdn;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount( int $amount ) {
        $this->amount = $amount;
    }

    public function getServiceProviderCode() {
        return $this->service_provider_code;
    }

    public function setServiceProviderCode( int $service_provider_code ) {
        $this->service_provider_code = $service_provider_code;
    }

    public function getHttpStatus() {
        return $this->http_status;
    }

    public function getResponse() {
        return $this->response;
    }

    public function getErrorMessages() {
        $this->errors;
    }

}
