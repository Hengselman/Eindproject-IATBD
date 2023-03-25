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
        Schema::create('huisdier', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("soort");
            $table->foreign("soort")->references("soort")->on("huisdier_soorten");
            $table->string("image")->default("/img/huisdier_default.jpg");
            $table->string("description");
            $table->unsignedBigInteger("eigenaar_id")->default('1');
            $table->foreign("eigenaar_id")->references("id")->on("users");
            $table->string("eigenaar_name")->default('Devin Stigter');
            $table->foreign("eigenaar_name")->references('name')->on("users");
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
            $table->dropForeign('huisdier_soort_foreign');
        });
        
        Schema::dropIfExists('huisdier');
    }
};
