<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class introduceController extends Controller
{
    public function index($id){
        $member = \App\Models\Message::where('id', '=', $id)->first();
        return view('introduce', [
            'member' => $member,
        ]);
    }
}
