<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$arr=[
			'id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'alamat'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],
			'username'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'email'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'password'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],

		];
		$this->forge->addField($arr);

		$this->forge->addKey('id',true);

		$this->forge->createtable('users',True);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
