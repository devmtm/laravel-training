<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function products() {
        $products = Product::get();
        return view('products', compact('products'));
    }
}
