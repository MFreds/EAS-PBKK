<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ItemImages extends Migration
{
	public function up()
	{
		$arr=[
			'im_id' => [
				'type'			=> 'INT',
				'unsigned'		=> true,
				'auto_increment'=>true,
			],
			'item_id'	=>[
				'type'			=> 'INT',
				'unsigned'		=> true,
			],
			'path'	=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> 512,
				'unique'		=> true
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

		$this->forge->addKey('im_id',true);
		$this->forge->addForeignKey('item_id','items','i_id','CASCADE','CASCADE');
		$this->forge->createtable('item_images',True);
	}

	public function down()
	{
		$this->forge->dropTable('item_images');
	}
}
