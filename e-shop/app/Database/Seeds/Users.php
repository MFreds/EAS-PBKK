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
                'name'  => 'admin',
                'password'  =>  password_hash('qwertyqaz', PASSWORD_BCRYPT),
				'role'	=> ROLE_ADMIN
            ],
            [
                'email'  => '1@user.com',
                'name'  => 'maman',
                'password'  =>  password_hash('12341234', PASSWORD_BCRYPT),
				'role'	=> ROLE_CUSTOMER
            ],
			[
                'email'  => '2@user.com',
                'name'  => 'edd',
                'password'  =>  password_hash('56785678', PASSWORD_BCRYPT),
				'role'	=> ROLE_CUSTOMER
            ]
        ];
		$this->db->table('users')->insertBatch($data);
	}
}
