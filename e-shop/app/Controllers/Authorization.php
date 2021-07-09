<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemEdit;
use App\Models\Transaction;
use App\Models\Cart;
use App\Models\User;
class Authorization extends BaseController
{
    protected $transaction;
	protected $user;
	protected $cart;
	protected $item;
 
    function __construct()
    {
        $this->user = new User();
		$this->transaction = new Transaction();
		$this->cart = new Cart();
		
    }
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
            'name'         => 'required|min_length[4]|max_length[50]',
            'password'      => 'required|min_length[8]|max_length[50]',
        ];
        if (!$this->validate($rules)) {
            session()->setFlashdata('error_reg', $this->validator->listErrors());
            return redirect()->back();
        }
        $data=[
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ];
        $this->user->save($data);
        session()->setFlashdata('sucess_register','Registrasi Berhasil Silahkan Login' );
        return redirect()->to('/auth');

    }

	public function login()
    {
        $session = session();
        $this->user = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $dataUser = $this->user->where([
            'email' => $email,
        ])->first();

        if ($dataUser) {
            // echo $dataUser;
            if (password_verify($password, $dataUser['password'])) {
                $last=$this->transaction->getActiveTransaction($dataUser['u_id']);
                if(empty($last)){
                    $data=[
                        'user_id' => $dataUser['u_id'],
                        'status' => T_ACTIVE,
                    ];
                    $this->transaction->save($data);
                    $last=$this->transaction->getActiveTransaction($dataUser['u_id']);
                }
                $ses_data=[
                    'id' => $dataUser['u_id'],
                    'email' => $dataUser['email'],
                    'name' => $dataUser['name'],
                    'logged_in' => TRUE,
                    'role'  => $dataUser['role'],
                    'transaction' => $last
                ];
                $role=ROLE_CUSTOMER;
                if($dataUser['role']==ROLE_ADMIN){
                    $role=ROLE_ADMIN;
                    session()->set($ses_data);
                    return redirect()->to('/admin');
                }
                session()->set($ses_data);
                return redirect()->to('/');
            } else {
                session()->setFlashdata('error_log', 'Password salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error_log', 'Email tidak ditemukan silahkan mendaftar terlebih dahulu');
            return redirect()->back();
        }

        
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
