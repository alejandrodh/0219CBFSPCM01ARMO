<?php

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
         //$this->call(UsersTableSeeder::class);
         factory(\App\Product::class, 20)->create();
         factory(\App\Category::class, 20)->create();

    }
}
