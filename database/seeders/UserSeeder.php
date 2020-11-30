<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>Str::random(5) . '' . Str::random(5),
                'password' => Hash::make('password'),
                'email' => Str::random(10) . 'gmail.com',
                'country_id' => 1,
                'role_id'=> rand(1,3)
            ]
        ]);
    }
}
