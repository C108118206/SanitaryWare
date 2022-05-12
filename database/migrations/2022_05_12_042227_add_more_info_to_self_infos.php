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
        Schema::table('self_infos', function (Blueprint $table) {
            $table->string('fax', 30)->nullable();
            $table->string('mail', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('self_infos', function (Blueprint $table) {
            $table->dropColumn(['fax','mail']);
        });
    }
};
