<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMediciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediciones', function (Blueprint $table) {
            $table->id();
            $table->String("fecha",50);
            $table->String("hora",50);
            $table->integer("medidor",50);
            //$table->String("direccion",50);
            $table->integer("valor");
            //$table->integer("medidas");
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
        Schema::dropIfExists('mediciones');
    }
}
