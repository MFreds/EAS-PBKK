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
		// $res= $items->getFewItems(4,'asc');
		// $res= $items->getFullItemsbyId(1);
		// $res= $items->getImages_byId(12);
		echo '<pre>'; print_r($res); echo '</pre>';
	}
}
