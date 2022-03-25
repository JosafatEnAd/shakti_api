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
        Schema::create('horarios', function (Blueprint $table) {
            $table->mediumIncrements('id_horario')->comment('Id del horario');
            $table->dateTime('fecha_hora')->comment('Fecha y hora de la cita');
            $table->string('estatus',['Libre', 'Ocupado'])->comment('Estatus del horario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
