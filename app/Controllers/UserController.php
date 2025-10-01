<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
      return view('page');
    }

    public function create()
    { 
      $userModel = new UserModel();

      $data =[
        'firstname'=>request()->getPost('firstname'),
        'lastname'=>request()->getPost('lastname'),
        'email'=>request()->getPost('email')
      ];

      $userModel->insert($data);

      return redirect()->to('login');
    }

    public function list()
    {
      $userModel = new UserModel();

      $data['users']= $userModel->findAll();

      return view('list', $data);
    }
}
