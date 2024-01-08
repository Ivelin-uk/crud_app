<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id)
    {
        return view('user.profile',['id' => $id]);
    }
}
