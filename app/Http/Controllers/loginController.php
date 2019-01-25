<?php

namespace App\Http\Controllers;

//use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    function login(Request $request) {
        $request->validate([
            'name' => [
                'required',
                'regex:/^[a-zA-Z0-9]{3,9}$/'
            ],

            'password' => [
                'required',
                'regex:/^[a-zA-Z0-9]{6,12}$/'
            ]
        ]);


//        if(isset($request['name']) && isset($request['password'])) {
//            $user = user::where('name', $request['name'])->get()->first();
//            if($user) {
//                if(Hash::check($request['password'] , $user->password)) {
//                    return redirect()->route('administrator');
//                }
//            } else {
//                abort(401);
//            }
//        }

        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->route('member');
        }

        return redirect()->route('login')->with('message', 'your name or password is wrong')->withInput();
    }
}
