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
        Schema::create('tv_images', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tv_id')->nullable();
            $table->index('tv_id', 'list_tv_tv_image_tv_idx');
            $table->foreign('tv_id', 'list_tv_tv_image_tv_fk')
                ->on('list_tvs')->references('id');

            $table->string('image_url');

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
        Schema::dropIfExists('tv_images');
    }
};
