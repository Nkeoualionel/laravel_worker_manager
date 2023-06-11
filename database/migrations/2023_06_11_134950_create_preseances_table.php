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
        Schema::create('preseances', function (Blueprint $table) {
            $table->id();
            $table->date('week_from');
            $table->date('week_to');
            $table->time('arriving_time');
            $table->time('departure_time');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('delay_reason_id');
            $table->foreign('delay_reason_id')->references('id')->on('delay_reasons')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preseances');
    }
};
