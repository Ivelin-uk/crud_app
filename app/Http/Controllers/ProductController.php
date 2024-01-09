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

    public function add_product_procces(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        // You can do something with the form data, like saving to the database

        return "Form submitted successfully. Name: $name, Email: $email";
    }
}
