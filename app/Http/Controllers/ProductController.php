<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Repositories\ProductRepository;

class ProductController extends Controller
{
    public function getProducts() {
        $productRepository = new ProductRepository;
        return $productRepository->getProducts();
    }
}
