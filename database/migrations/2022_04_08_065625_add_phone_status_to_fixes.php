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
        Schema::table('fixes', function (Blueprint $table) {
            $table->string('phone');
            $table->string('status')->default('回報中');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fixes', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('status');
        });
    }
};
