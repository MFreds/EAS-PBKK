<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
class Authorization extends BaseController
{
	public function index()
	{
		helper(['form']);
        $data = [];
        echo view('auth', $data);
	}
	public function register()
    {
        helper(['form']);
		$rules = [
            'email'         => 'required|min_length[4]|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[8]|max_length[50]',
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error_reg', $this->validator->listErrors());
            // echo session()->getFlashdata('error');
            // die();
            return redirect()->back();
        }
        $users = new User();
        $data=[
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];
        $users->save($data);
        session()->setFlashdata('sucess_register','Registrasi Berhasil Silahkan Login' );
        return redirect()->to('/auth');

    }

	public function login()
    {
        $session = session();
        $users = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $dataUser = $users->where([
            'email' => $email,
        ])->first();

        if ($dataUser) {
            // echo $dataUser;
            // die();
            
            if (password_verify($password, $dataUser['password'])) {
                $ses_data=[
                    'email' => $dataUser['email'],
                    'logged_in' => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/admin');
            } else {
                session()->setFlashdata('error_log', 'Password salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error_log', 'Email tidak ditemukan silahkan mendaftar terlebih dahulu');
            return redirect()->back();
        }
    }
}
