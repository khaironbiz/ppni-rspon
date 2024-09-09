<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Log;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\User\UserRepository;

class UserServiceImplement extends ServiceApi implements UserService{

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

    public function __construct(UserRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function index(){
        $users = $this->mainRepository->index();
        return $users;
    }
    public function store($data){
        try {
            $user = $this->mainRepository->store($data);
            return $user;
        }catch (\Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }

    }

    // Define your custom methods :)
}
