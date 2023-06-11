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
        Schema::table('users', function (Blueprint $table) {
            /*$table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('role_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');*/

            $table->unsignedBigInteger('departement_id');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
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
            /*$table->dropForeign(['city_id']);
            $table->dropColumn('city_id');

            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');*/
            $table->dropForeign(['departement_id']);
            $table->dropColumn('departement_id');
        });
    }
};
