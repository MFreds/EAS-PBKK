<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\ItemEdit;
use App\Models\Transaction;
use App\Models\Cart;
use App\Models\User;
class Home extends BaseController
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

	public function index()
	{
		$cat= new Category();
        $data['categories'] = $cat->findAll();
        $data['items'] = $this->item->getFewItems(50,'desc');
		echo view('home',$data);
	}
	public function auth()
	{
		return view('auth');
	}
	public function admin()
	{
		return view('admin/overview');
	}
	public function product($id)
	{
        $data['item'] = $this->item->getFullItemsbyId($id);
		$data['images'] = $this->item->getAllImages($id);
		$data['cart']= $this->cart->getUserCart($id);
		// print_r($data['cart']);
		// die();
		helper('form');
		echo view('product',$data);
	}
	public function carts()
	{
		$data['carts']=$this->transaction->getActiveTransactionCarts();
		helper('form');
		echo view('cart',$data);
	}
	// public function product1()
	// {
	// 	$item= new Item();
    //     $data['item'] = $item->getFullItemsbyId(11);
	// 	$data['images'] = $item->getAllImages(11);
	// 	echo view('product',$data);
	// }
}
