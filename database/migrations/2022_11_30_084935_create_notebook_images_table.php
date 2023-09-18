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
        Schema::create('notebook_images', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('notebook_id')->nullable();
            $table->index('notebook_id', 'list_notebook_notebook_image_notebook_idx');
            $table->foreign('notebook_id', 'list_notebook_notebook_image_notebook_fk')
                ->on('list_notebooks')->references('id');

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
        Schema::dropIfExists('notebook_images');
    }
};
