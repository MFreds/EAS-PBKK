<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
class Register extends BaseController
{
	public function index()
	{
		return view('auth');
	}
	public function process()
    {
        $register_validator = [
			'email'   => [
						'rules'		=> 'required|valid_email|is_unique[users.email]',
						'errors'	=>[
							'required'					=> 'email wajib diisi',
							'valid_email'				=> 'email tidak valid',
							'is_unique[users.email]'	=> 'email sudah terdaftar'
						],
					],
			'password' => [
						'rules'		=> 'required|min_length[8]',
						'errors'	=>[
							'required'			=> 'password dibutuhkan',
							'min_length[8]'		=> 'password harus 8 karakter'
							
						],
					],
		];

		if (!$this->validate($register_validator)) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/auth');
        }
        $users = new User();
        $users->insert([
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            
        ]);
        return redirect()->to('/');
    }
}
