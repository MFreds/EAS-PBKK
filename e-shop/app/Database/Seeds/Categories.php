<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
	public function run()
	{
		$data = [
            [
                'category'  => 'Keychain',
                'slug'  =>  'keychain'
            ],
            [
                'category'  => 'Poster',
                'slug'  =>  'poster'
            ],
			[
                'category'  => 'Apparel',
                'slug'  =>  'apparel'
            ],
            [
                'category'  => 'Action Figures',
                'slug'  =>  ' action-figures'
            ],
        ];
		$this->db->table('categories')->insertBatch($data);
	}
}
