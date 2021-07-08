<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
	public function up()
	{
		$arr=[
			't_id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'user_id'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'status'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'sum'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
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

		$this->forge->addKey('t_id',true);
		$this->forge->addForeignKey('user_id','users','u_id','CASCADE','CASCADE');
		$this->forge->createtable('transactions',True);
	}

	public function down()
	{
		//
		$this->forge->dropTable('transactions');
	}
}
