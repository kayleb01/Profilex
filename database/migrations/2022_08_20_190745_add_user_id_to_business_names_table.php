<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToBusinessNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_names', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->afer('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_names', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
