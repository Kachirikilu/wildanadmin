<?php
//controller API di CI4
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\CreateModels;

class APIController extends ResourceController
{
    public function index()
    {
        // $model = new CreateModels();
        // $data = $model->findAll();
        // return $this->respond($data);

        $model = new CreateModels();
        $data = $model->findAll();
        return $this->response->setHeader('Access-Control-Allow-Origin', '*')
                    ->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE')
                    ->setHeader('Access-Control-Allow-Headers', 'Content-Type')
                    ->setJSON($data);
    }
}
