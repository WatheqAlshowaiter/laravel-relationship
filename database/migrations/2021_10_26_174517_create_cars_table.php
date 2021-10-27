<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('sareq_id');
            // $table->morphs('buyer');
            $table->timestamps();

            // foreign keys
            // $table->foreign('sareq_id')->references('id')->on('sareqs')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('thief_id')->references('id')->on('thieves')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
