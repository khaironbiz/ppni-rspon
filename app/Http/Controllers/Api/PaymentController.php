<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Implement\Response\ResponseJson;
use App\Models\Duitku;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_method(Request $request, ResponseJson $json){
        $id_duitku          = $request->id_duitku;
        $duitku             = Duitku::find($id_duitku);

        if(empty($duitku)){
            $status_code    = 404;
            $data           = [
                'id_duitku' => $id_duitku
            ];
            $data_response  = $json->notfound($data, $status_code);
        }else{
            $merchantCode   = $duitku['merchantCode'];
            $apiKey         = $duitku['apiKey'];
            $datetime       = date('Y-m-d H:i:s');
            $paymentAmount  = 100000;
            $signature      = hash('sha256',$merchantCode . $paymentAmount . $datetime . $apiKey);
            $params = array(
                'merchantcode'  => $merchantCode,
                'amount'        => $paymentAmount,
                'datetime'      => $datetime,
                'signature'     => $signature
            );
            $base_url           = $duitku['base_url'];
            $url                = $base_url.'/webapi/api/merchant/paymentmethod/getpaymentmethod';
            $method             = "POST";
            $payment_methode    = $this->duitku($params, $url, $method);
            $status_code        = 200;
            $data               = $payment_methode->getOriginalContent();
            $data_response      = $json->success($data, $status_code);
        }
        return response()->json($data_response, $status_code) ;


    }
    //create
    public function store(Request $request){
        $id_duitku          = 2;
        $duitku             = Duitku::find($id_duitku);
        $invoice_number     = $request->invoice_number;
        $payment_method     = $request->payment_method;

        if(empty($duitku)){
            $status_code    = 404;
            $message        = "Wrong ID Payment Gateway";
            $data_response  = [
                'status_code'   => $status_code,
                'message'       => $message,
                'data'          => [
                    'id'        => $id_duitku
                ]
            ];
            return response()->json($data_response, $status_code);
        }else{
            $merchantCode       = $duitku['merchantCode'];
            $apiKey             = $duitku['apiKey'];
            $paymentAmount      = 40000;
            $paymentMethod      = $payment_method;
            $merchantOrderId    = $invoice_number; // dari merchant, unik
            $productDetails     = 'Tes pembayaran menggunakan Duitku';
            $email              = 'test@test.com'; // email pelanggan anda
            $phoneNumber        = '08123456789'; // nomor telepon pelanggan anda (opsional)
            $additionalParam    = ''; // opsional
            $merchantUserInfo   = ''; // opsional
            $customerVaName     = 'John Doe'; // tampilan nama pada tampilan konfirmasi bank
            $callbackUrl        = 'http://example.com/callback'; // url untuk callback
            $returnUrl          = 'http://example.com/return'; // url untuk redirect
            $expiryPeriod       = 10; // atur waktu kadaluarsa dalam hitungan menit
            $signature          = md5($merchantCode . $merchantOrderId . $paymentAmount . $apiKey);
            // Customer Detail
            $firstName          = "John";
            $lastName           = "Doe";

            // Address
            $alamat         = "Jl. Kembangan Raya";
            $city           = "Jakarta";
            $postalCode     = "11530";
            $countryCode    = "ID";

            $address = array(
                'firstName' => $firstName,
                'lastName' => $lastName,
                'address' => $alamat,
                'city' => $city,
                'postalCode' => $postalCode,
                'phone' => $phoneNumber,
                'countryCode' => $countryCode
            );

            $customerDetail = array(
                'firstName' => $firstName,
                'lastName' => $lastName,
                'email' => $email,
                'phoneNumber' => $phoneNumber,
                'billingAddress' => $address,
                'shippingAddress' => $address
            );

            $item1 = array(
                'name' => 'Test Item 1',
                'price' => 10000,
                'quantity' => 1);

            $item2 = array(
                'name' => 'Test Item 2',
                'price' => 30000,
                'quantity' => 3);

            $itemDetails = array(
                $item1, $item2
            );
            $params = array(
                'merchantCode'      => $merchantCode,
                'paymentAmount'     => $paymentAmount,
                'paymentMethod'     => $paymentMethod,
                'merchantOrderId'   => $merchantOrderId,
                'productDetails'    => $productDetails,
                'additionalParam'   => $additionalParam,
                'merchantUserInfo'  => $merchantUserInfo,
                'customerVaName'    => $customerVaName,
                'email'             => $email,
                'phoneNumber'       => $phoneNumber,
                //'accountLink'     => $accountLink,
                //'creditCardDetail' => $creditCardDetail,
                'itemDetails'       => $itemDetails,
                'customerDetail'    => $customerDetail,
                'callbackUrl'       => $callbackUrl,
                'returnUrl'         => $returnUrl,
                'signature'         => $signature,
                'expiryPeriod'      => $expiryPeriod
            );
            $url = 'https://sandbox.duitku.com/webapi/api/merchant/v2/inquiry'; // Sandbox
            // $url = 'https://passport.duitku.com/webapi/api/merchant/v2/inquiry'; // Production
            $method = "POST";
            $create = $this->duitku($params, $url, $method);
            return response()->json($create->getOriginalContent());
        }


    }

    public function callback(Request $request){
        $id_duitku          = $request->id_duitku;
        $duitku             = Duitku::find($id_duitku);
        if(empty($apiKey)){
            $apiKey = $duitku->apiKey;
        }else{
            $apiKey = $duitku->apiKey;
        }
        $merchantCode       = isset($request['merchantCode']) ? $request['merchantCode'] : null;
        $amount             = isset($request['amount']) ? $request['amount'] : null;
        $merchantOrderId    = isset($request['merchantOrderId']) ? $request['merchantOrderId'] : null;
        $productDetail      = isset($request['productDetail']) ? $request['productDetail'] : null;
        $additionalParam    = isset($request['additionalParam']) ? $request['additionalParam'] : null;
        $paymentMethod      = isset($request['paymentCode']) ? $request['paymentCode'] : null;
        $resultCode         = isset($request['resultCode']) ? $request['resultCode'] : null;
        $merchantUserId     = isset($request['merchantUserId']) ? $request['merchantUserId'] : null;
        $reference          = isset($request['reference']) ? $request['reference'] : null;
        $signature          = isset($request['signature']) ? $request['signature'] : null;
        $publisherOrderId   = isset($request['publisherOrderId']) ? $request['publisherOrderId'] : null;
        $spUserHash         = isset($request['spUserHash']) ? $request['spUserHash'] : null;
        $settlementDate     = isset($request['settlementDate']) ? $request['settlementDate'] : null;
        $issuerCode         = isset($request['issuerCode']) ? $request['issuerCode'] : null;
        $data_input         = [
            'merchantCode'      => $merchantCode,
            'amount'            => $amount,
            'merchantOrderId'   => $merchantOrderId,
            'productDetail'     => $productDetail,
            'additionalParam'   => $additionalParam,
            'paymentMethod'     => $paymentMethod,
            'resultCode'        => $resultCode,
            'merchantUserId'    => $merchantUserId,
            'reference'         => $reference,
            'signature'         => $signature,
            'publisherOrderId'  => $publisherOrderId,
            'spUserHash'        => $spUserHash,
            'settlementDate'    => $settlementDate,
            'issuerCode'        => $issuerCode
        ];

        if (!empty($merchantCode) && !empty($amount) && !empty($merchantOrderId) && !empty($signature)) {
            $params         = $merchantCode . $amount . $merchantOrderId . $apiKey;
            $calcSignature  = md5($params);

            if ($signature == $calcSignature) {
                //Callback tervalidasi
                //Silahkan rubah status transaksi anda disini
                // file_put_contents('callback.txt', "* Success *\r\n\r\n", FILE_APPEND | LOCK_EX);
            } else {
                $status_code    = 401;
                $message        = "Unauthorized";
                $data_response  = [
                    'status_code'   => $status_code,
                    'message'       => $message,
                    'data'          => [
                        'input'     => $data_input
                    ],
                ];
                return response()->json($data_response, $status_code);
            }
        } else {
            $status_code    = 400;
            $message        = "Bad Request";
            $data_response = [
                'status_code'   => $status_code,
                'message'       => $message,
                'data'          => [
                    'input'     => $data_input
                ],
            ];
            return response()->json($data_response, $status_code);
        }

    }
    public function cek_transaksi(Request $request){
        $id_duitku          = 2;
        $duitku             = Duitku::find($id_duitku);
        $merchantCode       = $duitku->merchantCode;
        $apiKey             = $duitku->apiKey;
        $merchantOrderId    = $request->order_id; // dari anda (merchant), bersifat unik
        $signature          = md5($merchantCode . $merchantOrderId . $apiKey);
        $params             = array(
            'merchantCode'      => $merchantCode,
            'merchantOrderId'   => $merchantOrderId,
            'signature'         => $signature
        );
        $url        = 'https://sandbox.duitku.com/webapi/api/merchant/transactionStatus';
        $method     = "POST";
        $create     = $this->duitku($params, $url, $method);
        return response()->json($create->getOriginalContent());
    }
    private function duitku($params, $url, $method){
        $params_string = json_encode($params);
        //echo $params_string;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($params_string))
        );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        //execute post
        $request = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($httpCode == 200)
        {
            $result = json_decode($request, true);
            return response()->json($result);
        }
        else
        {
            $request = json_decode($request);
            $error_message = "Server Error " . $httpCode ." ". $request->Message;
            echo $error_message;
        }
    }

}
