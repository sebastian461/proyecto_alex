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
        Schema::create('personal', function (Blueprint $table) {
            $table->char('cedulaPersonal', 10)->primary();
            $table->string('nombresPersonal', 50);            
            $table->string('apellidosPersonal', 50);
            $table->char('telefonoPersonal', 10)->unique();
            $table->string('correoPersonal', 100)->unique();
            $table->string('cargoPersonal', 50);
            $table->string('descripcionCargoPersonal', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};
