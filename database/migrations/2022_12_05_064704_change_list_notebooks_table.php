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
        Schema::table('list_notebooks', function (Blueprint $table) {
            $table->renameColumn('storage', 'ssd');
            $table->string('hdd')->after('ssd')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('list_notebooks', function (Blueprint $table) {
            $table->renameColumn('ssd', 'storage');
            $table->dropColumn('hdd');
        });
    }
};
