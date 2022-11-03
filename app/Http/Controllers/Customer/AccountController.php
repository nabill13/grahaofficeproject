<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        return view('customers.account.index', [
            'title' => 'Account',
            'nvb' => 'account',
            'user' => $user
        ]);
    }

    public function edit()
    {
        $user = User::find(auth()->user()->id);
        
        return view('customers.account.edit', [
            'title' => 'Account Edit',
            'nvb' => 'edit',
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        $image_path = '';

        $user = User::find($request->user_id);
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('user-images');
            if ($user->image != null) {
                Storage::delete($user->image);
            }
            $user->image = $image_path;
        }
        
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->rule_id = 3;
        if (strlen($request->password) > 0){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        DB::commit();

        return redirect('/account');
    }
}
