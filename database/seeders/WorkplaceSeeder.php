<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class WorkplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workplaces')->insert([
            [
                'title'=>Str::random(10),
                'started_at'=>Carbon::yesterday(),
                'ended_at'=>Carbon::now(),
                'company_id'=>1,
                'user_id'=>1
            ]
             ]);
    }
}
