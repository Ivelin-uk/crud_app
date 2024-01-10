<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{
    public function home()
    {
        return view('layouts.main');
    }


    public function list_products()
    {
        $this->middleware('auth'); 
        return view('pages.list_products');
    }

    public function add_product()
    {
        return view('pages.add_product');
    }

    public function add_product_procces(Request $request)
    {
        $name = $request->input('name');
        $quantity = $request->input('quantity');

        $validated_data = $request->validate([
            'name' => 'required|string|max:4',
        ]);

        // You can do something with the form data, like saving to the database

        return "Form submitted successfully. Name: $name, Quantity: $quantity";
    }

    public function register_user()
    {
        return view('pages.register_user');
    }


    public function register_user_procces(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

         // Create a new user in the database
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect('/login_user')->with('success', 'Registration successful!');
    }

    public function login_user()
    {
        return view('pages.login_user');
    }

    public function login_user_procces(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Login successful!');
        }

        return redirect('/login_user')->withErrors(['error' => 'Invalid credentials']);
    }
}
