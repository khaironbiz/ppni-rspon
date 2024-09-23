<?php

namespace App\Services\File;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use LaravelEasyRepository\ServiceApi;
use App\Repositories\File\FileRepository;

class FileServiceImplement extends ServiceApi implements FileService{

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

    public function __construct(FileRepository $mainRepository)
    {
      $this->mainRepository = $mainRepository;
    }

    public function store($user_id, $nama_file, $file){
        try {
            $result     = Storage::disk('s3')->putFileAs('files', $file, $file->hashName(), 'public');
            $url        = Storage::disk('s3')->url($result);
            $data_file  = [
                'user_id'   => $user_id,
                'title'     => $nama_file,
                'file_name' => $file->hashName(),
                'extention' => $file->getClientOriginalExtension(),
                'file_type' => $file->getType(),
                'size'      => $file->getSize(),
                'url'       => url($url)
            ];
            try {
                $create = $this->mainRepository->create($data_file);
                return $create;
            }catch (\Exception $exception){
                Log::error($exception->getMessage());
                return [];
            }

        }catch (\Exception $exception){
            Log::error($exception->getMessage());
            return [];
        }


    }

    // Define your custom methods :)
}
