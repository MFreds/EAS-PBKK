<?php

namespace App\Models;

use CodeIgniter\Model;

class Item extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'items';
	protected $primaryKey           = 'item_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['item_id','product_name','vendor','description','stock','price','category_id'];

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
				-> join('categories as c','c.c_id=items.category_id')
				-> join('item_images as im','im.item_id=items.i_id','left')
				->groupBy('items.i_id')
				->get()->getResultArray();
	}
	public function getFullItemsbyId($id){
		return $this->db->table('items')
				-> join('categories as c','c.c_id=items.category_id')
				->where('items.i_id',$id)
				->get()->getRowArray();
	}
	public function getFewItems($limit,$order){
		return $this->db->table('items')
				-> join('categories as c','c.c_id=items.category_id')
				-> join('item_images as im','im.item_id=items.i_id')
				->groupBy('items.i_id')->orderBy("items.i_id",$order)
				->limit($limit)->get()->getResultArray();
	}
	public function getAllImages($id){
		return $this->db->table('items')
				-> join('item_images as im','im.item_id=items.i_id')
				->where('items.i_id',$id)->get()->getResultArray();
	}
	public function getImages_byId($id){
		return $this->db->table('items')
				-> join('item_images as im','im.item_id=items.i_id')
				->where('items.i_id',$id)
				->get()->getRowArray();
	}
}
