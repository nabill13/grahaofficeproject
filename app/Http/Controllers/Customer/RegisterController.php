<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('customers.register.index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->last_name;
        $user->username = $request->username;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->rule_id = 3;
        $user->save();

        return redirect('/register');
    }
}
