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
        Schema::create('list_mobile_phones', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('code');
            $table->string('diagonal');
            $table->string('type');
            $table->string('expansion');
            $table->string('refresh_rate');
            $table->string('processor_name');
            $table->string('core_type');
            $table->string('core_count');
            $table->string('frequency');
            $table->string('video_card');
            $table->string('ram_memory');
            $table->string('storage');
            $table->string('card_type');
            $table->string('max_card_memory');
            $table->string('sim_count');
            $table->string('sim_size');
            $table->string('standard');
            $table->string('os');
            $table->string('main_mp');
            $table->string('main_features');
            $table->string('main_video');
            $table->string('front_mp');
            $table->string('front_video');
            $table->string('battery');
            $table->string('material');
            $table->string('weight');
            $table->string('dimensions');
            $table->string('connectors');
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
        Schema::dropIfExists('list_mobile_phones');
    }
};
