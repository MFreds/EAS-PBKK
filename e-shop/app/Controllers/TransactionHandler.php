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

	
	public function addToCart($i_id)
	{
		
		$u_id=session()->get('id');
		$trans=session()->get('transaction');
		if($this->request->getPost('qtt')!=null){
			$quantity=$this->request->getPost('qtt');
		}else{
			$quantity=1;
		}

		$cart_data=[
			'item_id' => $i_id,
			'transaction_id' => $trans['t_id'],
		];
		$cart=$this->cart->where($cart_data)->first();
		$cart_data['quantity']=$quantity;
		if(empty($cart)){
			$this->cart->save($cart_data);
		}else{

			if($cart['isdeleted']==C_DELETED){
				$cart_data['isdeleted']=C_ACTIVE;				
			}
			$this->cart->update($cart['crt_id'],$cart_data);
		}
		return redirect()->to(base_url('product/'.$i_id));

	}
	public function removeFromCart($i_id)
	{
		// print_r($i_id);die();
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
		return redirect()->to(base_url('cart'));

	}
	public function clearCart()
	{
		// print_r($i_id);die();
		$u_id=session()->get('id');
		$trans=session()->get('transaction');
		$cart_data=[
			'transaction_id' => $trans['t_id'],
		];
		$carts=$this->cart->where($cart_data)->get()->getResultArray();
		$cart_data['quantity']=1;
		$cart_data['isdeleted']=C_DELETED;
		foreach ($carts as $c) {
			# code...
			$this->cart->update($c['crt_id'],$cart_data);
		}
		
		return redirect()->to(base_url('cart'));
	}
	public function checkoutCart()
	{

		$u_id=session()->get('id');
		$trans=session()->get('transaction');
		$cart_data=[
			'transaction_id' => $trans['t_id'],
		];
		$carts=$this->transaction->getActiveTransactionCarts();
		$cart_data['isdeleted']=2;
		$sum=0;
		foreach ($carts as $c) {
			$sum=$sum+($c['quantity']*$c['price']);
			$item_data=[
				'stock'=>$c['stock']-$c['quantity']
			];
			if($item_data['stock']<0){
				return redirect()->to('/cart');
			}
			$this->item->update($c['i_id'],$item_data);
			$this->cart->update($c['crt_id'],$cart_data);
		}
		$trans_data=[
			'status' => T_CHECKOUT,
			'sum'	=> $sum
		];
		$this->transaction->update($trans['t_id'],$trans_data);
		$new_trans=[
			'user_id' => $u_id,
			'status' => T_ACTIVE,
		];

		$this->transaction->save($new_trans);
		$last=$this->transaction->getActiveTransaction($u_id);
		$ses_data=[
			'transaction' => $last
		];
		session()->set($ses_data);
		return redirect()->to(base_url('cart'));
	}
}
