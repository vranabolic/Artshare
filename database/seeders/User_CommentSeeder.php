<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class User_CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_comments')->insert([
            [
           'comment'=>Str::random(10),
           'posted_at'=> Carbon::yesterday(),
           'user_id'=> 1
            ]
            ]);
    }
}
