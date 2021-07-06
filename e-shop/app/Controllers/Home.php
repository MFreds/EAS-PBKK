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
        $data['items'] = $item->findAll();
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
}
