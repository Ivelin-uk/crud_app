<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list_products()
    {
        return view('pages.list_products');
    }

    public function add_product()
    {
        return view('pages.add_product');
    }
}
