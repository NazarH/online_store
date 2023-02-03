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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->text('review');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'user_review_user_idx');
            $table->foreign('user_id', 'user_review_user_fk')
                ->on('users')->references('id');

            $table->unsignedBigInteger('notebook_id')->nullable();
            $table->index('notebook_id', 'list_notebook_review_notebook_idx');
            $table->foreign('notebook_id', 'list_notebook_review_notebook_fk')
                ->on('list_notebooks')->references('id');

            $table->unsignedBigInteger('phone_id')->nullable();
            $table->index('phone_id', 'list_mobile_phone_review_phone_idx');
            $table->foreign('phone_id', 'list_mobile_phone_review_phone_fk')
                ->on('list_mobile_phones')->references('id');

            $table->unsignedBigInteger('book_id')->nullable();
            $table->index('book_id', 'list_book_review_book_idx');
            $table->foreign('book_id', 'list_book_review_book_fk')
                ->on('list_books')->references('id');

            $table->unsignedBigInteger('television_id')->nullable();
            $table->index('television_id', 'list_tv_review_television_idx');
            $table->foreign('television_id', 'list_tv_review_television_fk')
                ->on('list_tvs')->references('id');

            $table->boolean('verify')->default(false);
            $table->boolean('acquired')->default(false);

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
        Schema::dropIfExists('reviews');
    }
};
