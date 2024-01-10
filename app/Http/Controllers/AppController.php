<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('layouts.main');
    }


    public function list_products()
    {
        return view('pages.list_products');
    }

    public function add_product()
    {
        return view('pages.add_product');
    }

    public function register_user()
    {
        return view('pages.register_user');
    }

    public function add_product_procces(Request $request)
    {
        $name = $request->input('name');
        $quantity = $request->input('quantity');

        $validatedData = $request->validate([
            'name' => 'required|string|max:4',
        ]);

        // You can do something with the form data, like saving to the database

        return "Form submitted successfully. Name: $name, Quantity: $quantity";
    }
}
