<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class RegistrationController extends BaseController
{
    public function index()
    {
        return view('registrationPage');
    }

    public function registerUser()
    {
        try {
            $request = service('request');

            $data = [
                'FirstName' => $request->getPost('firstname'),
                'LastName' => $request->getPost('lastname'),
                'Email' => $request->getPost('email'),
                'Salary' => $request->getPost('salary'),
            ];

            $userModel = new UserModel();

            if ($userModel->createUser($data)) {
                return redirect()->to(base_url('/'))->with('success', 'Successfully created user!'); 
            }
            return redirect()->to(base_url('register-page'))->withInput()->with('error', 'Failed to register user.'); 

        } catch (\Throwable $e) {
            log_message('error', $e->getMessage());
            return redirect()->to(base_url('register-page'))->withInput()->with('error', 'Failed to register user.'); 
        }
    } 
}
