<?php

namespace App\Services\UserEducation;

use Illuminate\Support\Facades\Log;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\UserEducation\UserEducationRepository;

class UserEducationServiceImplement extends ServiceApi implements UserEducationService{

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

    public function __construct(UserEducationRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function store($data) : object{
        try {
            $save = $this->mainRepository->create($data);
            return $save;
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            Log::debug($message);
            return objectValue();
        }
    }
    public function getById($id){
        try {
            $data = $this->mainRepository->find($id);
            return $data;
        }catch (\Exception $exception){
            $message = $exception->getMessage();
            Log::debug($message);
            return [];
        }

    }

    // Define your custom methods :)
}
