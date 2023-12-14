<?php

namespace App\Http\Controllers\pages;

use App\Models\Song;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Main extends Controller
{
    private $api_key = 'b7kopep68b93xlz8aiva4hm4bg0bltj4';
    private $public_key = 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==
    ';

    public function invoke()
    {
        $songs = Song::get();

        return view('pages.index', [
            'songs' => $songs
        ]);
    }

    public function mpesa( Request $request )
    {

        $api_context = [
            'api_key' => $this->api_key,
            'public_key' => $this->public_key,
            'ssl' => true,
            'method_type' => 'POST',
            'address' => 'api.sandbox.vm.co.mz',
            'port' => 18352,
            'path' => '/ipg/v1x/c2bPayment/singleStage/',
            'headers' => [
                'Origin' => '*',
                'Content-Type' => 'application/json',
                'Authorization' => $this->getBearerToken()
            ],
            'parameters' => [
                'input_TransactionReference' => strtoupper(uniqid()),
                'input_CustomerMSISDN' => '258' . $request->msisdn,
                'input_Amount' => '100',
                'input_ThirdPartyReference' => '111PA2D',
                'input_ServiceProviderCode' => '171717',
            ],
        ];

        $response = Http::withHeaders($api_context['headers'])
            ->post("https://{$api_context['address']}:{$api_context['port']}{$api_context['path']}", $api_context['parameters']);

        $http_status = $response->status();
        $response_body = $response->body();
        $response = json_decode($response_body);
        $response = get_object_vars($response);
        if ($response['output_ResponseCode'] == 'INS-0') {

            $song = Song::findOrFail($request->song_id);
            $song->votes = ((int)$song->votes + 1);
            $song->save();
        }

        return back();
    }

    public function getBearerToken(): string
    {
        $publickey = "-----BEGIN PUBLIC KEY-----\n";
        $publickey .= str_replace(["\r", "\n"], '', $this->public_key);
        $publickey .= "\n-----END PUBLIC KEY-----";

        $key = openssl_get_publickey($publickey);

        if (!$key) {
            $error = openssl_error_string();
            die("Erro ao carregar a chave pública: $error");
        }

        $encrypted = '';
        $result = openssl_public_encrypt($this->api_key, $encrypted, $key, OPENSSL_PKCS1_PADDING);

        if (!$result) {
            $error = openssl_error_string();
            die("Erro ao criptografar dados: $error");
        }

        return 'Bearer ' . base64_encode($encrypted);
    }
}