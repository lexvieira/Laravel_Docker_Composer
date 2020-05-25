<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnRecursoDisponivelRecursoDisps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recurso_disps', function (Blueprint $table) {
            $table->dropColumn('recurso_disponivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recurso_disps', function (Blueprint $table) {
            $table->string('recurso_disponivel');
        });
    }
}
