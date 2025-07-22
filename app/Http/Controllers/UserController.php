<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
            'username' => 'required | min:3 | max:20',
            'email' => 'required | email ',
            'city' => 'required | min:3 | max:20',
            'skill' => 'required',
        ]);
        return $request->all();
    }
}
