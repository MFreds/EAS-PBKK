<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$data = [
            [
                'email'  => '1@admin.com',
                'password'  =>  password_hash('qwertyqaz', PASSWORD_BCRYPT),
				'role'	=> ROLE_ADMIN
            ],
            [
                'email'  => '1@user.com',
                'password'  =>  password_hash('12341234', PASSWORD_BCRYPT),
				'role'	=> ROLE_CUSTOMER
            ],
			[
                'email'  => '2@user.com',
                'password'  =>  password_hash('56785678', PASSWORD_BCRYPT),
				'role'	=> ROLE_CUSTOMER
            ]
        ];
		$this->db->table('users')->insertBatch($data);
	}
}
