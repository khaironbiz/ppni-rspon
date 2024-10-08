<?php

namespace App\Services\Web;

use Illuminate\Support\Facades\Log;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\Web\WebRepository;

class WebServiceImplement extends ServiceApi implements WebService{

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

    public function __construct(WebRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function store($data){
        try {
            $save = $this->mainRepository->create($data);
            return $save;
        }catch (\Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }
    }

    public function show($id):object{
        try {
            $find = $this->mainRepository->find($id);
            return $find;
        }catch (\Exception $exception){
            Log::debug($exception->getMessage());
            return objectValue();
        }
    }
}
