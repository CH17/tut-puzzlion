<?php

use Illuminate\Database\Seeder;

class PuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       


        $puzzles = factory(App\Puzzle::class, 30)->create();
    }
}
