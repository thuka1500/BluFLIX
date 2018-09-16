<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideoSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_settings', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('video_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos');
            $table->float('size', 10, 0);
            $table->decimal('duration', 20, 6)->unsigned();
            $table->string('video_codec');
            $table->integer('video_width')->unsigned();
            $table->integer('video_height')->unsigned();
            $table->bigInteger('video_bitrate')->unsigned();
            $table->string('audio_codec')->nullable();
            $table->bigInteger('audio_bitrate')->unsigned()->nullable();
            $table->tinyInteger('audio_channels')->unsigned()->nullable();
            $table->bigInteger('audio_sample_rate')->unsigned()->nullable();
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
        Schema::dropIfExists('video_settings');
    }
}
