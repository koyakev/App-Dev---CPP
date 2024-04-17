<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\User;

class QuizController extends Controller
{
    public function introduction(){
        if(session()->get('isLogedIn')){
            return view('quiz.introduction');
        } else {
            return redirect()->route('login');
        }

    }

    public function introductionRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['introduction' => $score]);

        if($score >= 60 && strval($user->level) == 1){
            User::where('id', '=', session()->get('id'))->update(['level' => 2]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

    public function syntax(){
        if(session()->get('isLogedIn')){
            return view('quiz.syntax');
        } else {
            return redirect()->route('login');
        }

    }

    public function syntaxRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['syntax' => $score]);

        if($score >= 60 && $user->level == 2){
            User::where('id', '=', session()->get('id'))->update(['level' => 3]);
        }

        return redirect()->route('dashboard')->with('message', $score);

    }

    public function variables(){
        if(session()->get('isLogedIn')){
            return view('quiz.variables');
        } else {
            return redirect()->route('login');
        }

    }

    public function variablesRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['variables' => $score]);

        if($score >= 60 && $user->level == 3){
            User::where('id', '=', session()->get('id'))->update(['level' => 4]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

    public function operators(){
        if(session()->get('isLogedIn')){
            return view('quiz.operators');
        } else {
            return redirect()->route('login');
        }

    }

    public function operatorsRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['operators' => $score]);

        if($score >= 60 && $user->level == 4){
            User::where('id', '=', session()->get('id'))->update(['level' => 5]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

    public function conditionals(){
        if(session()->get('isLogedIn')){
            return view('quiz.conditionals');
        } else {
            return redirect()->route('login');
        }

    }

    public function conditionalsRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['conditionals' => $score]);

        if($score >= 60 && $user->level == 5){
            User::where('id', '=', session()->get('id'))->update(['level' => 6]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

    public function loops(){
        if(session()->get('isLogedIn')){
            return view('quiz.loops');
        } else {
            return redirect()->route('login');
        }

    }

    public function loopsRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['loops' => $score]);

        if($score >= 60 && $user->level == 6){
            User::where('id', '=', session()->get('id'))->update(['level' => 7]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

    public function functions(){
        if(session()->get('isLogedIn')){
            return view('quiz.functions');
        } else {
            return redirect()->route('login');
        }

    }

    public function functionsRate(){
        $answers = request()->all();
        $score = ($answers['q1'] + $answers['q2'] + $answers['q3'] + $answers['q4'] + $answers['q5'])/5 * 100;
        $user = User::where('id', '=', session()->get('id'))->first();

        Score::where('uid', '=', session()->get('id'))->update(['functions' => $score]);

        if($score >= 60 && $user->level == 7){
            User::where('id', '=', session()->get('id'))->update(['level' => 10]);
        }

        return redirect()->route('dashboard')->with('message', $score);
    }

}
