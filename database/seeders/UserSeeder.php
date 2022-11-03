<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->rule_id = '1';
        $user->username = 'admin';
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->phone = '112233';
        $user->password = bcrypt('1234');
        $user->created_at = date_create();
        $user->save();
    }
}
