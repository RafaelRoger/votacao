<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function invoke() {

        return view('admin.user-register', [
        ]);
    }

    public function userList() {

        $users = User::with('user_position')->get();

        return view('admin.user-list', [
            'users' => $users
        ]);
    }
    

    public function store(Request $request) {

        $request->validate([
            'email'    => ['required', 'email', 'unique:users'],
            'name'     => ['required'],
            'password' => ['min:8', 'confirmed'],
        ]);

        $obUser = new User;
        $obUser->name     = $request->name;
        $obUser->email    = $request->email;
        $obUser->password = Hash::make($request->password);
        if ($obUser->save()) {
            return back()->with('message', 'User created successfully.');
        }
        return back()->withErrors('An error occurred while creating the user');
    }
}
