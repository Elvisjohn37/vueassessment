<?php

namespace App\Http\Repositories;

use DB;
use Auth;

class ProductRepository
{
	public function getProducts()
	{
		if(Auth::check()) {
			echo "wala";
		}
		return DB::table('product')->select()->get()->toArray();
	}

	
}
