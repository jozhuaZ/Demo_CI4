<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        return view('createPage');
    }

    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'firstname' => request()->getPost('firstname'),
            'middlename' => request()->getPost('middlename'),
            'lastname' => request()->getPost('lastname'),
        ];

        $userModel->insert($data);

        return redirect()->to('/list-users');
    }

    public function listUsers()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('list', $data);
    }

    public function getUser($id)
    {
        $userModel = new UserModel();
        
        $data['user'] = $userModel->find($id);

        return view('updateForm', $data);
    }

    public function update($id)
    {
        $userModel = new UserModel();
        
        $data = [
            'firstname' => request()->getPost('firstname'),
            'middlename' => request()->getPost('middlename'),
            'lastname' => request()->getPost('lastname'),
        ];

        $userModel->update($id, $data);

        return redirect()->to('/list-users');
    }
}
