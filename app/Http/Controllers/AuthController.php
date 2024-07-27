<?php

namespace App\Http\Controllers;

use App\Models\Server;
use App\Models\User ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller 
{
    public function LoginView(){
        return view('loginform');
    }

    public function RegisterView(){
        return view('registerform');
    }

    public function postRegister(Request $req){
        $rules = [
            'email' =>  'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one number
                'regex:/[@$!%*#?&]/'  // must contain at least one special character
            ],
            'name' => 'required|string|max:255|unique:users',
        ];

        $messages = [
            'password.confirmed' => 'Passwords do not match.',  // Custom error message for password confirmation
            'password.regex' => 'Password must include at least one lowercase letter, one uppercase letter, one number, and one special character.',  // Custom error message for password complexity
        ];

        $req->validate($rules, $messages);

        $req -> merge(['password'=>Hash::make($req->password)]);
        try {
            $user = User::create($req->all());
        } catch(\Throwable $th) {
            return redirect()->back()->withInput($req->only('email'))->withErrors(['error' => 'Something went wrong!']);
        }
        
        return redirect('loginform');
    }

    public function postLogin(Request $req) {
        if(Auth::attempt(['email'=> $req->email, 'password' => $req->password])) {
            $req->session()->regenerate();
            return redirect()->route('home');
        }
        return redirect()->back()->withInput($req->only('email','name'))->withErrors(['email'=>'Invalid email or password']);
    }

    public function logout(Request $req){
        Auth::guard('web')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}