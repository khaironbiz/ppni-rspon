<?php

namespace App\Contract;

interface ResponseContract
{
    public function success($data, $status_code);
    public function unauthorized();
    public function notfound($data, $status_code);
    public function validation();

}
