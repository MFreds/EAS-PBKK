<?php

namespace App\Models;

use CodeIgniter\Model;

class Item extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'items';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id','product_name','vendor','description','category_id'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getFullItems(){
		return $this->db->table('items')
				-> join('categories as c','c.id=items.category_id')
				-> join('item_images as im','im.item_id=items.id')
				->groupBy('items.id')->get()->getResultArray();
	}
	public function getAllImages($id){
		return $this->db->table('items')
				-> join('item_images as im','im.item_id=items.id')
				->where('items.id',$id)->get()->getResultArray();
	}
}
