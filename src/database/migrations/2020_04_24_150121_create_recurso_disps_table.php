<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoDispsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_disps', function (Blueprint $table) {
            $table->id();
            $table->string('nome_recurso');
            $table->string('capacidade_recurso');
            $table->string('capacidade_producao');
            $table->string('observacao');
            $table->string('recurso_disponivel');
            $table->foreignId('empresa_id');                     
            $table->foreign('empresa_id')->references('id')->on('empresas')
            ->constrained()
            ->onDelete('cascade')
            ->onUpdate('cascade');            
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
        Schema::dropIfExists('recurso_disps');
    }
}
