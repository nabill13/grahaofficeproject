<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();

        return view('admin.users.index', [
            'title' => 'Users',
            'nvb' => 'users',
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('admin.users.create', [
            'title' => 'Users Add',
            'nvb' => 'users'
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $image_path = '';
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('user-images');
        }

        $user = new User;
        $user->rule_id = $request->rule;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->image = $image_path;
        $user->save();
        DB::commit();

        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $user = User::find($id);
        
        return view('admin.users.edit', [
            'title' => 'User Edit',
            'nvb' => 'users',
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
        $user->rule_id = $request->rule;
        $user->save();
        DB::commit();

        return redirect('/admin/users');
    }

    public function remove($id)
    {
        $user = User::find($id);
        if ($user->image != null) {
            Storage::delete($user->image);
        }
        $user->delete();

        return redirect('/admin/users');
    }
}
