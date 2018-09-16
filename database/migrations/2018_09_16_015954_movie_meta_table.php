<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovieMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tmdb_movie_id')->default(0)->index();
            $table->string('title')->nullable();
            $table->text('overview')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->integer('runtime')->unsigned()->default(0);
            $table->decimal('score', 9, 2)->default(0);
            $table->bigInteger('votes')->unsigned()->default(0);
            $table->date('release_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_meta');
    }
}
