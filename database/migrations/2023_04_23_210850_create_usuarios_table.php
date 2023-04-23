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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('idUsuario')->primary();
            $table->char('cedulaPersonal', 10);
            $table->bigIncrements('idRol');
            $table->string('nombreUsuario', 20)->unique();
            $table->string('contraseñaUsuario', 50);
            $table->bool('estadoUsuario');
            $table->timestamps();

            $table->foreign('cedulaPersonal')->references('cedulaPersonal')->on('personal');
            $table->foreign('idRol')->references('idRol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
