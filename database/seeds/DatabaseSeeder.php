<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(TagSeeder::class);
         $this->call(PuzzleSeeder::class);
         $this->call(TagPuzzleSeeder::class);
         $this->call(CommentSeeder::class);
    }
}
