<?php

namespace App\Http\Controllers;

// use App\Http\Requests\UserRequest;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Closure;

class UserController extends Controller
{
    //

    // public function addUser(UserRequest $req)
    public function addUser(Request $req)
    {

        // $req->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|alpha_num|min:6',
        //     // 'age' => 'required|numeric|min:18|max:100',
        //     'age' => 'required|numeric|between:28,100',
        //     'city' => 'required',

        //     // 'name' => 'required|string|max:255',
        //     // 'email' => 'required|email|unique:users,email',
        //     // 'password' => 'required|string|min:8|confirmed',
        // ], [
        //     'name.required' => 'Please enter your name',
        //     'email.required' => 'Please enter your email address',
        //     'password.required' => 'Please enter a password',
        //     'age.required' => 'Please enter your age. min age 28',
        //     'city.required' => 'Please select a city',
        //     // You can customize the error messages here            
        // ]);
        // return $req->all();


        // Return the user form view
        // return view('user-form');

        // return $req->all();

        // return $req->only('name', 'city');
        // return $req->except('name', 'city');


        // // Custom validation rules 
        // $req->validate(
        //     [
        //         'name' => ['required', new Uppercase],
        //         'email' => 'required|email',
        //         'password' => 'required|alpha_num|min:6',
        //         'age' => 'required|numeric|between:18,100',
        //         'city' => 'required',
        //     ],
        //     [
        //         'name.required' => 'Please enter your name.',
        //         'email.required' => 'Please enter your email address',
        //         'password.required' => 'Please enter a password',
        //         'age.required' => 'Please enter your age. min age 28',
        //         'city.required' => 'Please select a city',
        //         // You can customize the error messages here            
        //     ]
        // );
        // return $req->all();



        // Custom validation rules Closure 
        $validate = $req->validate(
            [
                'name' => [
                    'required',
                    function (string $attribute, mixed $value, Closure $fail) {
                        if (strtoupper($value) !== $value) {
                            // $fail('The ' . $attribute . ' must be uppercase.');
                            $fail('The :attribute must be uppercase.');
                        }
                    }
                ],
                'email' => 'required|email',
                'password' => 'required|alpha_num|min:6',
                'age' => 'required|numeric|between:18,100',
                'city' => 'required',

            ]
        );
        // return $req->all();
        dd($validate);

        // echo $validate['name'] . '<br>';
    }
}
