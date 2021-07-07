<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
	public function up()
	{
		$arr=[
			'i_id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'product_name'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 200,
			],
			'vendor'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 200,
			],
			'description'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 2048,
			],
			'price'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'stock'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'category_id'	=>[
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

		$this->forge->addKey('i_id',true);
		$this->forge->addForeignKey('category_id','categories','c_id','CASCADE','CASCADE');
		$this->forge->createtable('items',True);
	}

	public function down()
	{
		$this->forge->dropTable('items');
	}
}
