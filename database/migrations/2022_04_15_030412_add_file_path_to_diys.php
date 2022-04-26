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
        Schema::table('diys', function (Blueprint $table) {
            $table->dropColumn('content');
        });
        Schema::table('diys', function (Blueprint $table) {
            $table->string('content')->nullable();
            $table->string('video_path',2048)->nullable();
            $table->string('file_path',2048)->nullable();
            $table->string('image_path',2048)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diys', function (Blueprint $table) {
            $table->dropColumn('content');
        });
        Schema::table('diys', function (Blueprint $table) {
            $table->string('content');
            $table->dropColumn(['video_path','file_path','image_path']);
        });
    }
};
