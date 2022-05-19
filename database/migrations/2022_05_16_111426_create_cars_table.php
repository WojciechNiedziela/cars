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
        Schema::dropIfExists('cars'); //robimy to jednorazowo bo byl blad i stworzylo zla tabele
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("vin")->unique();
            //$table->string("model_id")->nullable();
            $table->string("color")->nullable();
            $table->integer("price")->nullable()->unsigned();
            $table->date("registration_date")->nullable();
            $table->text("description")->nullable();
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
        Schema::dropIfExists('cars');
    }
};
