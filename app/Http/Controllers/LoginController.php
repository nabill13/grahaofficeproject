<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (auth()->user()->rule_id == 1) {
                return redirect('/admin');
            } else if (auth()->user()->rule_id == 3) {
                return redirect('/');
            }
        }

        return view('admin.login.index', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        $email = strtolower($request->email);

        $user_credential = [
            'email' => $email,
            'password' => $request->password
        ]; 

        if (Auth::attempt($user_credential)){
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }
    }

    public function logout(Request $request)
    {
        $url = '';
        if (auth()->user()->rule_id == 1){
            $url = '/admin';
        }else{
            $url = '/';
        }
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect($url);
    }
}
