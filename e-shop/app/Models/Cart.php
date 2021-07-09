<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'carts';
	protected $primaryKey           = 'crt_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['crt_id','item_id','transaction_id','quantity','isdeleted'];

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
	
	public function getUserCart($item_id){
		
		$trans=session()->get('transaction');
		if($trans==null){
			return array();
		}
		else{
			return $this->db->table('carts as c')
					->where('c.transaction_id',$trans['t_id'])
					->where('c.item_id',$item_id)
					->where('c.isdeleted',C_ACTIVE)
					->get()->getRowArray();
			
		}
	}
}
