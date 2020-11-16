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
        DB::table('testimonies')->insert([
            'name'=> Str::random(10),
            'email'=> Str::random(10),
            'testimony' => Str::random(100)
        ]);
    }
}
