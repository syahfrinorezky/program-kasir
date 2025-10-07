<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function register()
    {
        helper('form');
        return view('auth/register');
    }

    public function registerSave()
    {
        $model  = new UserModel();

        $data = [
            'username'     => $this->request->getPost('username'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'level'        => 'user',
        ];

        $insertData = $model->insert($data);

        if ($insertData === false) {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }

        return redirect()->to('/')->with('success', 'Pendaftaran berhasil, silakan login.');
    }



    public function login()
    {
        helper('form');
        return view('auth/login');
    }
}
