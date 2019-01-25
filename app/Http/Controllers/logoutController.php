<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class logoutController extends Controller
{
    function logout(Request $request) {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
