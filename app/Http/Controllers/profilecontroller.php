<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class profilecontroller extends Controller
{
     public function index($user)
    {
    	$user = User::findOrFail($user);
        return view('home', ['user' => $user,]);
    }
}
