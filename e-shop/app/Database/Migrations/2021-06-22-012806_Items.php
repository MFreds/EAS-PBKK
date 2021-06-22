<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
	public function up()
	{
		$arr=[
			'id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'product_name'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'description'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'category_id'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
			],

		];

		$this->forge->addField($arr);

		$this->forge->addKey('id',true);
		$this->forge->addForeignKey('category_id','categories','id','CASCADE','CASCADE');
		$this->forge->createtable('items',True);
	}

	public function down()
	{
		$this->forge->dropTable('items');
	}
}
