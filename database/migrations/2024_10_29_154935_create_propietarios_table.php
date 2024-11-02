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
        Schema::create('propietario', function (Blueprint $table) {
            $table->id();
            $table->string ("cedula",24);
            $table->string ("nombres",48);
            $table->string ("apellidos", 48);
            $table->string ("email", 255)->unique();
            $table->string ("celular",16);
            $table->integer("activo")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietarios');
    }
};
