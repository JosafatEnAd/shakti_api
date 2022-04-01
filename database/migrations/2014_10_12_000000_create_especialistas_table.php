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
        Schema::create('especialistas', function (Blueprint $table) {
            $table->mediumIncrements('id_especialista')->comment('ID del especialista');
            $table->string('nombre_completo')->comment('Nombre del especialista');
            $table->string('cedula_profesional');
            $table->string('telefono');
            $table->string('email')->unique()->comment('Correo del usuario');
            $table->timestamp('email_verified_at')->nullable()->comment('Verificación del usuario');
            $table->string('password', 20)->comment('Contraseña del usuario');
            $table->enum('perfil', ['Administrador','Paciente'])->comment('Perfil del administrador');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_especialidad')->references('id_especialidad')->on('especialidades');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
