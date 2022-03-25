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
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id_paciente')->comment('ID del paciente');
            $table->string('nombre_completo')->comment('Nombre Completo del Paciente');
            $table->enum('sexo', ['Femenino', 'Masculino', 'Prefiere no decirlo'])->comment('Sexo del paciente');
            $table->date('fecha_nacimiento')->comment('Fecha de nacimiento del paciente');
            $table->integer('telefono')->comment('Sexo del paciente ');
            $table->string('email')->unique()->comment('Correo del paciente');
            $table->timestamp('email_verified_at')->nullable()->comment('Verificación del paciente');
            $table->string('password', 20)->comment('Contraseña del paciente');  
            $table->enum('perfil', ['Administrador', 'Paciente'])->comment('Perfil del usuario');         
            $table->rememberToken();
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
        Schema::dropIfExists('pacientes');
    }
};
