<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUrlToQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qrcodes', function (Blueprint $table) {
            $table->string('url')->nullable();
            $table->string('text_color')->nullable();
            $table->string('text_size')->nullable();
            $table->string('text_x')->nullable();
            $table->string('text_y')->nullable();
            $table->string('qr_color')->nullable();
            $table->string('style')->nullable();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('eye_style')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qrcodes', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
