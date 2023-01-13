<?php

namespace App\Http\Repositories;

use Vinkla\Hashids\Facades\Hashids;
use App\Models\User;

class LoginRepository
{
	public function getUserDetails()
	{
        return User::Select("loginName")->get()->toArray();
	}

	
}
