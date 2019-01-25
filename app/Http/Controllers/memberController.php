<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function index(){
        $members = \App\Models\Message::all();
        return view('member',[
            'members'=> $members
        ]);
    }
}
