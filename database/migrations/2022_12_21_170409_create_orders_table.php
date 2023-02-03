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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'user_order_user_idx');
            $table->foreign('user_id', 'user_order_user_fk')
                ->on('users')->references('id');

            $table->string('name');
            $table->string('surname');
            $table->string('phone_number');

            $table->string('product_code');

            $table->string('delivery_city');

            $table->string('delivery');

            $table->string('mail_address')->default('none');

            $table->string('street')->default('none');;
            $table->string('house')->default('none');;
            $table->string('flat')->default('none');;

            $table->string('payment')->default('self');

            $table->string('recipient_name');
            $table->string('recipient_surname');
            $table->string('recipient_patronymic');
            $table->string('recipient_number');

            $table->string('verify')->default(false);

            $table->string('price');

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
        Schema::dropIfExists('orders');
    }
};
