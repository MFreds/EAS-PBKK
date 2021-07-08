<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carts extends Migration
{
	public function up()
	{
		$arr=[
			'crt_id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'item_id'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'transaction_id'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'quantity'	=>[
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

		$this->forge->addKey('crt_id',true);
		$this->forge->addForeignKey('item_id','items','i_id');
		$this->forge->addForeignKey('transaction_id','transactions','t_id');
		$this->forge->createtable('carts',True);
	}

	public function down()
	{
		$this->forge->dropTable('carts');
	}
}
