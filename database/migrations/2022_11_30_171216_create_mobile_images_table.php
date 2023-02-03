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
        Schema::create('mobile_images', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('mobile_id')->nullable();
            $table->index('mobile_id', 'list_mobile_phone_mobile_image_mobile_idx');
            $table->foreign('mobile_id', 'list_mobile_phone_mobile_image_mobile_fk')
                ->on('list_mobile_phones')->references('id');

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
        Schema::dropIfExists('mobile_images');
    }
};
