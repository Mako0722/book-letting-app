<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            Schema::table('comics', function (Blueprint $table) {
                $table->string('image')->index('index_image')->after('description')->nullable();  //追加
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            Schema::table('comics', function (Blueprint $table) {
                $table->dropColumn('image')->nullable();  //追加
            });
        });
    }
}
