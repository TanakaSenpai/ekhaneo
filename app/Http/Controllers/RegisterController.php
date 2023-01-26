<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register', ['divisions' => Divisions::get()]);
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|alpha_dash|unique:users|max:255',
            'email' => 'required|email|unique:users',
            'division' => 'required',
            'phone_number' => 'required|digits:11|starts_with:0',
            'password' => 'required|string|min:5|confirmed',
        ]);

        $token = Str::random(19);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'token' => $token,
            'division' => $request->division,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);
        return to_route('login')->with('login', 'Your account was registered successfully, please login.');
    }
}
