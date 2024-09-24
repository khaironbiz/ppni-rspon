<?php

namespace App\Repositories\UserEducation;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\UserEducation;

class UserEducationRepositoryImplement extends Eloquent implements UserEducationRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(UserEducation $model)
    {
        $this->model = $model;
    }
    public function getById($id){
        $data = $this->model->where('id',$id)->first();
        return $data;
    }

    // Write something awesome :)
}
