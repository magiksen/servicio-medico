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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_hora');
            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->text('antecedentes');
            $table->text('motivo_consulta');
            $table->text('enfermedad_actual')->nullable();
            $table->string('peso');
            $table->string('altura');
            $table->string('tension');
            $table->text('diagnostico');
            $table->text('examenes');
            $table->string('estado')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
