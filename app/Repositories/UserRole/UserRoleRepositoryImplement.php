<?php

namespace App\Repositories\UserRole;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\UserRole;

class UserRoleRepositoryImplement extends Eloquent implements UserRoleRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(UserRole $model)
    {
        $this->model = $model;
    }

    // Write something awesome :)
}
