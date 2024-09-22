<?php

namespace App\Repositories\Web;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Web;

class WebRepositoryImplement extends Eloquent implements WebRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Web $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
