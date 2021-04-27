<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLibraryUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('library_users', function (Blueprint $table) {
            $table->integer('is_shared')->nullable()->change();
        });

        Schema::table('library_groups', function (Blueprint $table) {
            $table->integer('is_shared')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('library_users', function (Blueprint $table) {
            $table->integer('is_shared')->change();
        });

        Schema::table('library_groups', function (Blueprint $table) {
            $table->integer('is_shared')->change();
        });
    }
}
