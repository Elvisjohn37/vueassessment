<?php

namespace App\Http\Repositories;
use DB;

class BasketRepository
{
	public function getbasket()
	{
		return DB::table('basket')->select()->get()->toArray();
	}

	
}
