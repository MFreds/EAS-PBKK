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
	protected $user;
	protected $cart;
	protected $item;
 
    function __construct()
    {
        $this->user = new User();
		$this->transaction = new Transaction();
		$this->cart = new Cart();
		$this->item = new Item();
    }
	public function removeFromCart($i_id)
	{
		print_r($i_id);die();
		$u_id=session()->get('id');
		$trans=session()->get('transaction');
		$cart_data=[
			'transaction_id' => $trans['t_id'],
			'item_id' => $i_id,
		];
		
		$cart=$this->cart->where($cart_data)->first();
		$cart_data['quantity']=1;
		$cart_data['isdeleted']=C_DELETED;
		$this->cart->update($cart['crt_id'],$cart_data);
		return redirect()->back();
	}
	public function addToCart($i_id)
	{
		
		$u_id=session()->get('id');
		$trans=session()->get('transaction');
		$quantity=$this->request->getPost('qtt');

		$cart_data=[
			'item_id' => $i_id,
			'transaction_id' => $trans['t_id'],
		];
		$cart=$this->cart->where($cart_data)->first();
		$cart_data['quantity']=$quantity;
		if(empty($cart)){
			print_r();
			die();
			$this->cart->save($cart_data);
		}else{

			if($cart['isdeleted']==C_DELETED){
				$cart_data['isdeleted']=C_ACTIVE;				
			}
			$this->cart->update($cart['crt_id'],$cart_data);
		}
		return redirect()->back();

	}
	
}
