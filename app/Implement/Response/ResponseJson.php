<?php


namespace App\Implement\Response;

use App\Contract\ResponseContract;


class ResponseJson implements ResponseContract
{
    public function success($data, $status_code)
    {
        // TODO: Implement success() method.
        $message        = "Success";
        $data_response  = [
            'status_code'   => $status_code,
            'message'       => $message,
            'data'          => $data
        ];
        // TODO: Implement notfound() method.
        return ($data_response);
    }
    public function unauthorized()
    {
        // TODO: Implement unauthorized() method.
    }
    public function notfound($data, $status_code)
    {
        $message        = "Not Found";
        $data_response  = [
            'status_code'   => $status_code,
            'message'       => $message,
            'data'          => $data
        ];
        // TODO: Implement notfound() method.
        return ($data_response);
    }
    public function validation()
    {
        // TODO: Implement validation() method.
    }
    private function response($status_code, $message, $data){
        $data_response  = [
            'status_code'   => $status_code,
            'message'       => $message,
            'data'          => $data
        ];
    }
}
