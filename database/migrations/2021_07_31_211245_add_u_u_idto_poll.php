<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUUIdtoPoll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->string('uuid')->nullable();
        });

        Schema::table('votes', function (Blueprint $table) {
            $table->string('uuid')->nullable();
            $table->dropColumn('unique_id');
            $table->dropColumn('poll_value_id');
            $table->integer('user_id')->nullable();
            $table->string('value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->dropColumn('uuid')->nullable();
        });
        Schema::table('votes', function (Blueprint $table) {
            $table->dropColumn('uuid');
            $table->dropColumn('value')->nullable();
            $table->string('poll_value_id')->nullable();
            $table->string('unique_id')->nullable();
            $table->dropColumn('user_id');
        });
    }
}
