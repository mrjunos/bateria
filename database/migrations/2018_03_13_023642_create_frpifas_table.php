<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrpifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frpifas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->timestamp('fecha_cuestionario');
            $table->unsignedInteger('user_id');
            $table->string('pv1')->nullable();
            $table->string('pv2')->nullable();
            for ($i=1; $i <= 123; $i++) { $table->integer('p'.$i)->nullable(); }
            $table->timestamps();
            $table->unique(['cedula', 'fecha_cuestionario', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frpifas');
    }
}
