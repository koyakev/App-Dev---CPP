<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LessonController extends Controller
{
    public function introduction(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            return view('lessons.introduction')->with('user', $user);
        } else {
            return redirect()->route('login');
        }
    }

    public function syntax(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 2){
                return redirect()->route('introduction');
            } else {
                return view('lessons.syntax')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function variables(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 3){
                return redirect()->route('syntax');
            } else {
                return view('lessons.variables')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function operators(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 4){
                return redirect()->route('variables');
            } else {
                return view('lessons.operations')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }


    }

    public function conditionals(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 5){
                return redirect()->route('operators');
            } else {
                return view('lessons.conditionals')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }

    }

    public function loops(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 6){
                return redirect()->route('conditionals');
            } else {
                return view('lessons.loops')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function functions(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            if($user->level < 7){
                return redirect()->route('loops');
            } else {
                return view('lessons.functions')->with('user', $user);
            }
        } else {
            return redirect()->route('login');
        }


    }
}
