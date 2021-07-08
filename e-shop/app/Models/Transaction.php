<?php

namespace App\Models;

use CodeIgniter\Model;

class Transaction extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'transactions';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['t_id','user_id','status','sum'];

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

	public function getActiveTransaction($id){
		return $this->db->table('transactions as t')
				-> join('users as u','u.u_id=t.user_id')
				->where('u.u_id',$id)
				->where('t.status',T_ACTIVE)
				->get()->getLastRow('array');
	}
	public function getActiveTransactionCarts(){
		
		$trans=session()->get('transaction');
		$count= $res=$this->db->table('carts as c')
		-> join('items as i','c.item_id=i.i_id')->countAllResults();
		
		if($count<1) return array();
		else 
			return $this->db->table('carts as c')
					-> join('items as i','c.item_id=i.i_id')
					-> join('item_images as im','c.item_id=im.item_id')
					->where('c.transaction_id',$trans['t_id'])
					->where('c.isdeleted',C_ACTIVE)
					->groupby('c.crt_id')
					->get()->getResultArray();
	}

}
