<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Rules\Name;
class UserController extends Controller
{
    public function admin($name)
    {
        if (View::exists('admin.login')) {
            return View('admin.login', ['name' => $name]);
        }
        return 'No View Found';
    }

    public function users()
    {
        $users = [
            'Asif', 'Ali hasan', 'Ali Hasan', 'Ali Hasan', 'Ali Hasan',
        ];

        return view('users', ['users' => $users]);
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:3', 'max:20', new Name],
            'email' => 'required | email ',
            'city' => 'required | min:3 | max:20 | uppercase',
            'skill' => 'required',
        ], [
            'username.required' => 'Username is required',
            'username.min' => 'Username must be at least 3 characters',
            'username.max' => 'Username must be less than 20 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'city.required' => 'City is required',
            'city.min' => 'City must be at least 3 characters',
            'city.max' => 'City must be less than 20 characters',
            'skill.required' => 'Skill is required',
        ]);
        return $request->all();
    }
}
