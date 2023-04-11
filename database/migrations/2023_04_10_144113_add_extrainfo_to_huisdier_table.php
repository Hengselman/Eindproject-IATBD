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
        Schema::table('huisdier', function (Blueprint $table) {
            $table->date("wanneer")->nullable();
            $table->integer("hoeveel_dagen")->nullable();
            $table->integer("uurtarief")->nullable();
            $table->text("belangrijke_info")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->dropColumn("wanneer");
            $table->dropColumn("hoeveel_dagen");
            $table->dropColumn("uurtarief");
            $table->dropColumn("belangrijke_info");
        });
    }
};
