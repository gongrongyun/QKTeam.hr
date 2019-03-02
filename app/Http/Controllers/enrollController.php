<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class enrollController extends Controller
{
    function enroll(Request $request) {
        $request->validate([
            'name' => 'required',
            'birthday' => 'required|date',
            'studentId' => [
                'required',
                'regex:/^[0-9]{13}$/'
            ],
            'college' => 'required',
            'profession' => 'required',
            'phoneNumber' => [
                'required',
                'regex:/^[0-9]{11}$/'
            ],
            'email' =>'required|email',
            'qq' => 'required',
            'gender' => 'required',
            'skills' => 'array',
            'selfIntroduction' => 'nullable',
            'blog' => 'nullable',
            'github' => 'nullable',
            'expectation' => 'nullable',
            'elseSkills' => 'nullable'

        ]);

        $user = new Message;

        $user->name = $request->input('name');
        $user->birthday = $request->input('birthday');
        $user->studentId = $request->input('studentId');
        $user->college = $request->input('college');
        $user->profession = $request->input('profession');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->qq = $request->input('qq');
        $user->gender = $request->input('gender', 1);
        $user->selfIntroduction = $request->input('selfIntroduction');
        $user->blog = $request->input('blog');
        $user->github = $request->input('github');
//        if(json_encode($request->input('skills'))=='null')
//            $user->skills="sorry! the baby don't have any kills";
//        else
//            $user->skills = json_encode($request->input('skills'));
        $user->skills = json_encode($request->input('skills'));
        $user->elseSkills = $request->input('elseSkills');
        $user->expectation = $request->input('expectation');

        $user->save();

        return redirect('enroll')->with('message','Success')->withInput();
    }
}
