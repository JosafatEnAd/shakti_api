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
        Schema::create('citas', function (Blueprint $table) {
            $table->mediumIncrements('id_consulta')->comment('ID de la consulta');
            $table->foreign('id_paciente')->comment('ID del paciente');
            $table->foreign('horario_id');
            $table->enum('estatus', ['Agenadada', 'Cancelada'])->comment('Estatus de la cita');
            $table->timestamps();
            $table->foreign('id_especialista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
