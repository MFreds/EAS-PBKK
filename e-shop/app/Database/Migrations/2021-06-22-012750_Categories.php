<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
	public function up()
	{
		$arr=[
			'id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'category'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],
			'slug'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 100,
				'unique'		=> true
			],

		];
		$this->forge->addField($arr);

		$this->forge->addKey('id',true);

		$this->forge->createtable('categories',True);
	}

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
