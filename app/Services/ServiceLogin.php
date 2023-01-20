<?php

namespace App\Services;

use App\Services\RepositoryService;

class ServiceLogin {


    protected $repositoryService;

    public function __construct(RepositoryService $repositoryService)
    {
        $this->repositoryService = $repositoryService;
    }


 /**
     * menjalankan class Service
     *
     *
     * @method MyHelper
     */
    public function execute()
    {

        
        return ($this->repositoryService->get_Database() . ",lalu Jalankan class service login" );
        
    }

   



}