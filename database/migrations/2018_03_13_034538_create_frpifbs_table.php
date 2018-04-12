<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrpifbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frpifbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->timestamp('fecha_cuestionario');
            $table->unsignedInteger('user_id');
            $table->string('pv1')->nullable();
            for ($i=1; $i <= 97; $i++) { $table->integer('p'.$i)->nullable(); }
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
        Schema::dropIfExists('frpifbs');
    }
}
