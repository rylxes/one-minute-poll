<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEncryptionToFolders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->boolean('is_lock')->default(false);
            $table->boolean('is_favourite')->default(false);
            $table->string('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropColumn('is_lock')->default(false);
            $table->dropColumn('is_favourite')->default(false);
            $table->dropColumn('password')->nullable()->change();
        });
    }
}
