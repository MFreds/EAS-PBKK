<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemEdit;
use App\Models\Transaction;
use App\Models\Cart;
use App\Models\User;
class TransactionHandler extends BaseController
{
	protected $transaction;
 
    function __construct()
    {
        $this->user = new User();
		$this->transaction = new Transaction();
		$this->cart = new Cart();
		$this->item = new Item();
    }
	function addToCart($i_id)
	{
		$u_id=session()->get('id');
		$last=$this->transaction->getActiveTransaction($u_id);
		$quantity=$this->request->getPost('qtt');
		if(empty($last)){
			$data=[
				'user_id' => $u_id,
				'status' => T_ACTIVE,
			];
			$this->transaction->save($data);
			$last=$this->transaction->getActiveTransaction($u_id);
		}
		$cart_data=[
			'item_id' => $i_id,
			'transaction_id' => $last['t_id'],
			'quantity' => $quantity,
		];
		$this->cart->save($cart_data);

	}
}
