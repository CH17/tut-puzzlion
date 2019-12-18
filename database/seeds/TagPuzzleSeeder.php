<?php

use Illuminate\Database\Seeder;

class TagPuzzleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagsIds      = App\Tag::pluck('id')->toArray();

       
        App\Puzzle::all()->each(function ($puzzle) use ($tagsIds){

            $rand_num = random_int(2,5);

            $rand_keys = array_rand($tagsIds, $rand_num);
    
            $tag_arr = [];
            
            for($i=0; $i< $rand_num; $i++){

                array_push($tag_arr, $tagsIds[$rand_keys[$i]]);

            }               
          
            $puzzle->tags()->sync($tag_arr);

        });
    }
}
