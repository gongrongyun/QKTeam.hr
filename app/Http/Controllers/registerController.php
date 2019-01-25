<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function register(Request $request) {
        $user = new user();
        $user->name = $request['name'];
        $user->password = $request['password'];
        $user->fill([
            'password' => Hash::make($request['password'])
        ])->save();

        return redirect()->route('administrator');
    }
}
