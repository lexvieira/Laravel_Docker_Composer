<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecursoDisponivelIntegerNullableRecursoDisps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recurso_disps', function (Blueprint $table) {
            $table->integer('recurso_disponivel')->nullable()->after('observacao');
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
            $table->dropColumn('recurso_disponivel');
        });
    }

}
