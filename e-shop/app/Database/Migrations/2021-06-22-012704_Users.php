<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$arr=[
			'u_id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=> true,
				
			],
			'name'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100
			],
			'email'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'role'	=>[
				'type'			=> 'INT',
				'constraint'	=> 2,
				'deafult'		=> ROLE_CUSTOMER
			],
			'password'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 300,
			],
			'created_at'	=>[
				'type'			=> 'DATETIME',
			],
			'updated_at'	=>[
				'type'			=> 'DATETIME',
			],
			'deleted_at'	=>[
				'type'			=> 'DATETIME',
			],

		];
		$this->forge->addField($arr);

		$this->forge->addKey('u_id',true);

		$this->forge->createtable('users',True);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
