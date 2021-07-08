<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Item;
use App\Models\User;
use App\Models\ItemImage;

class API extends BaseController
{
	public function index()
	{
		$items= new User();
		// $res= $items->getFewItems(4,'asc');
		// $res= $items->getFullItemsbyId(1);
		$res= $items->getTransaction(1);
		if(!empty($res))echo "a";
		else echo "b";
		echo '<pre>'; print_r($res); echo '</pre>';
	}
}
