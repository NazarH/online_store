<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_tvs', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code');
            $table->string('diagonal');
            $table->string('type');
            $table->string('expansion');
            $table->string('refresh_rate');
            $table->string('contrast');
            $table->string('technologies');
            $table->string('response_time');
            $table->string('brightness');
            $table->string('ram_total');
            $table->string('storage');
            $table->string('audio_system');
            $table->string('sound_tech');
            $table->string('video_formats');
            $table->string('audio_formats');
            $table->string('img_formats');
            $table->string('os');
            $table->string('add_connect');
            $table->string('wifi');
            $table->string('bluetooth');
            $table->string('dim_with_stand');
            $table->string('dim_without_stand');
            $table->string('weight_with_stand');
            $table->string('weight_without_stand');
            $table->string('country');
            $table->string('kit');
            $table->string('guarantee');
            $table->string('price');
            $table->string('discount')->default('0');

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
        Schema::dropIfExists('list_tvs');
    }
};
