<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
class Home extends BaseController
{
	public function index()
	{
		$cat= new Category();
        $data['categories'] = $cat->findAll();
		$item= new Item();
        $data['items'] = $item->getFewItems(50,'desc');
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
	public function product($id=0)
	{
		$item= new Item();
        $data['items'] = $item->getFullItemsbyId();
		echo view('product',$data);
	}
	public function product1()
	{
		$item= new Item();
        $data['item'] = $item->getFullItemsbyId(11);
		$data['images'] = $item->getAllImages(11);
		echo view('product',$data);
	}
}
