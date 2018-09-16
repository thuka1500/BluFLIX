<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('title')->index();
            $table->string('slug');
            $table->string('type')->index();
            $table->integer('tmdb')->default(0)->index();
            $table->boolean('featured')->unsigned()->default(false);
            $table->integer('views')->default(0);
            $table->string('file_hash')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('published')->unsigned()->default(false);
            $table->bigInteger('user_id')->unsigned()->index();
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
        Schema::dropIfExists('videos');
    }
}
