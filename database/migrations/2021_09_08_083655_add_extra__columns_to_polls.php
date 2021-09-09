<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumnsToPolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->string('device_id')->nullable();
            $table->string('ip_country')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
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
            $table->dropColumn('device_id')->nullable();
            $table->dropColumn('ip_country')->nullable();
            $table->dropColumn('ip_address')->nullable();
            $table->dropColumn('lat')->nullable();
            $table->dropColumn('long')->nullable();
        });
    }
}
