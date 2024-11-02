<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propietario_id');
            $table->string ("nombre",48);
            $table->string ("raza",64);
            $table->integer ("edad")->default(0);
            $table->string ("edadmedida",8);
            $table->string ("descripcion", 128);
            $table->integer ("activo")->default(1);

            //Establecer el constrain de la llave foranea
            $table->foreign('propietario_id')->references('id')->on('propietario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
