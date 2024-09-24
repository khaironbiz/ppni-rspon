<?php

namespace App\Services\UserRole;

use LaravelEasyRepository\ServiceApi;
use App\Repositories\UserRole\UserRoleRepository;

class UserRoleServiceImplement extends ServiceApi implements UserRoleService{

    /**
     * set title message api for CRUD
     * @param string $title
     */
     protected $title = "";
     /**
     * uncomment this to override the default message
     * protected $create_message = "";
     * protected $update_message = "";
     * protected $delete_message = "";
     */

     /**
     * don't change $this->mainRepository variable name
     * because used in extends service class
     */
     protected $mainRepository;

    public function __construct(UserRoleRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function all(){
        $user_role = $this->mainRepository->all();
        return $user_role;
    }

    // Define your custom methods :)
}
