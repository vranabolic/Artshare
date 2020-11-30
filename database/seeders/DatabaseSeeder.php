<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            FollowerSeeder::class,
            UserSeeder::class,
            DocumentSeeder::class,
            MessageSeeder::class,
            User_CommentSeeder::class,
            CompanySeeder::class,
            WorkplaceSeeder::class

        ]);
    }
}
