<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('grado');

            $table->foreign('grado')
                ->references('id')
                ->on('grados')
                ->onDelete('cascade');

            $table->unsignedBigInteger('sede');

            $table->foreign('sede')
                ->references('id')
                ->on('sedes')
                ->onDelete('cascade');

            $table->unsignedBigInteger('jornada');

            $table->foreign('jornada')
                ->references('id')
                ->on('jornadas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('usuario');

            $table->foreign('usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('user_information');
    }
}
