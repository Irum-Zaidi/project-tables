<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function addUser(Request $req)
    {

        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            // 'age' => 'required|numeric|min:18|max:100',
            'age' => 'required|numeric|between:28,100',
            'city' => 'required',

            // 'name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:users,email',
            // 'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'password.required' => 'Please enter a password',
            'age.required' => 'Please enter your age. min age 28',
            'city.required' => 'Please select a city',
            // You can customize the error messages here            
        ]);
        return $req->all();
        // Return the user form view
        // return view('user-form');
    }
}
