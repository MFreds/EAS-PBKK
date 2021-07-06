<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;

class API extends BaseController
{
	public function index()
	{
		$items= new Item();
		$res= $items->getFewItems(2,'asc');
		echo '<pre>'; print_r($res); echo '</pre>';
	}
}
