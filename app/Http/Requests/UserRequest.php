<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'age' => 'required|numeric|between:18,100',
            'city' => 'required',

        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'Please enter your name',
            'name.required' => 'Please enter your :attribute  .... ',
            'email.required' => 'Please enter your email address',
            'password.required' => 'Please enter a password',
            'age.required' => 'Please enter your age. min age 18',
            'city.required' => 'Please select a city',
            // You can customize the error messages here            
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'user name',
            'email' => 'email address',
            'password' => 'user account password',
            'age' => 'user age',
            'city' => 'user city',
        ];
    }

    protected function prepareForValidation(): void
    {
        // You can modify the request data before validation if needed
        // For example, you can trim whitespace from the name
        // $this->merge([
            // 'name' => trim($this->name),
            // 'name' => strtoupper($this->name),
            // 'name' => Str::slug($this->name),
        // ]);
    }

    // protected $stopOnFirstFailure = true;
}
