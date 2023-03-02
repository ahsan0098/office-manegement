<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForiginKeysColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->bigInteger('dep_id');
            // $table->BigInteger('sub_dep_id');
            // $table->index('dep_id');
            // $table->index('sub_dep_id');
            // $table->foreign('dep_id')->references('id')->on('departments')->onDelete('cascade');
            // $table->foreign('sub_dep_id')->references('id')->on('subdepartments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
