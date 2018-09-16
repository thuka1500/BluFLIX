<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShowMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_meta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tmdb_show_id')->default(0)->unique()->index();
            $table->string('title')->nullable();
            $table->text('overview')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('runtime')->nullable();
            $table->float('popularity')->nullable();
            $table->decimal('score', 9, 2)->default(0);
            $table->bigInteger('votes')->unsigned()->default(0);
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
        Schema::dropIfExists('show_meta');
    }
}
