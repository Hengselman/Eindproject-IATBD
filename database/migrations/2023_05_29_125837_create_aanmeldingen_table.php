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
        Schema::create('aanmeldingen', function (Blueprint $table) {
            $table->unsignedBigInteger("gebruiker_id");
            $table->unsignedBigInteger("huisdier_id");

            $table->foreign('gebruiker_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('huisdier_id')->references('id')->on('huisdier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aanmeldingen');
    }
};
