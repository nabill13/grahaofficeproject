<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $rules = new Rule;
        $rules->level = 'Admin';
        $rules->save();

        $rules = new Rule;
        $rules->level = 'Super';
        $rules->save();

        $rules = new Rule;
        $rules->level = 'User';
        $rules->save();
        DB::commit();
    }
}
