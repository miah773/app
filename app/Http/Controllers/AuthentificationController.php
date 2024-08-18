<?php

namespace App\Http\Controllers;
use App\Models\User; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthentificationController extends Controller
{
     public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        // Validate the incoming request
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)){   
            return redirect('/dash')->with('success','login');
        }
        return redirect()->back()->with('error', 'Invalid email or password');

    }
}

