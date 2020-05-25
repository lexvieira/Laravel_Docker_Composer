<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_insumo');
            $table->integer('quantidade');
            $table->integer('tempo');
            $table->integer('unidade_de_tempo');
            $table->integer('material_insumo');
            $table->string('observacao');
            $table->foreignId('recurso_disp_id');
            $table->foreign('recurso_disp_id')->references('id')->on('recurso_disps')
            ->constrained()->onDelete('cascade')->onUpdate('cascade');            
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
        Schema::dropIfExists('insumos');
    }
}
