<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Repositories\LoginRepository;

class LoginController extends Controller
{
    public function login() {
        $loginRepository = new LoginRepository;
        return $loginRepository->getUserDetails();

    }
}
