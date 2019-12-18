<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuzzleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puzzle_tag', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('puzzle_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('puzzle_id')->on('puzzles')->references('id');
            $table->foreign('tag_id')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzle_tag');
    }
}
