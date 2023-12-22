<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Song;
use App\Providers\MpesaServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MpesaPaymentApi extends Controller
{
    public function pay(Request $request)
    {
        $public_key = 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==';
        $mpesa = new MpesaServiceProvider((int) '258' . $request->customer_msisdn, 6);
        $mpesa->setApiKey('b7kopep68b93xlz8aiva4hm4bg0bltj4');
        $mpesa->setPublicKey($public_key);
        $mpesa->generateTransactionReference(11);

        $song = Song::where('code', $request->code)->first();

        if ($song) {
            $mpesa->send();

            if ($mpesa->getResponse()['output_ResponseCode'] == 'INS-0') {

                $updated = $song->update(['votes' => ($song->votes + 1)]);

                if ($updated) {
                    return response()->json([
                        'status' => 200,
                        'message' => 'payment successfully made'
                    ], 200);
                } else {
                    return response()->json([
                        'status' => 500,
                        'message' => 'Error updating votes'
                    ], 500);
                }
            }
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Song not found'
            ], 404);
        }

        return new JsonResponse($mpesa->getResponse(), 500);
    }
}
