<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Score;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
        if(session()->get('isLogedIn')){
            $user = User::find(session()->get('id'));

            return view('dashboard')->with('user', $user);
        } else {
            return redirect()->route('login');
        }
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('registration');
    }

    public function store(Request $request){
        $user = new User();
        $request->validate([
            'username' => "required|min:8",
            'email' => "required|unique:users",
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        $data = $request->all();

        if($request['password'] == $request['cpassword']){
            $newUser = User::create([
                'name' => $data['username'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);

            Score::create(['uid' => $newUser->id]);

            return redirect()->route('login');

        } else {
            return redirect()->route('registration');
        }

    }

    public function verify(Request $request){
        $data = $request->all();
        $usersdb = User::all();

        foreach($usersdb as $user){
            if($data['email'] == $user->email && Hash::check($data['password'], $user->password)){
                session()->put('isLogedIn', true);
                session()->put('id', $user->id);

                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('login')->with('message', 'Credentials Invalid');

    }

    public function logout(){
        session()->flush();

        return redirect()->route('dashboard');
    }
}
