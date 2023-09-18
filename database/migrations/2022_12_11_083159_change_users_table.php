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
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user');
            $table->string('patronymic')->default('');
            $table->string('mobile_number')->default('');
            $table->string('street')->default('');
            $table->string('house')->default('');
            $table->string('flat')->default('');
            $table->string('surname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('mobile_number');
            $table->dropColumn('street');
            $table->dropColumn('house');
            $table->dropColumn('flat');
            $table->dropColumn('patronymic');
            $table->dropColumn('role');
        });
    }
};
