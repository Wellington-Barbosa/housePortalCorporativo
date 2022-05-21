<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateC010Despesas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('C010_Despesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('C010_CodigoDespesa')->unique();
            $table->string('C010_DescricaoDespesa');
            $table->string('C010_StatusDespesa')->nullable();
            $table->string('C010_UsuarioInclusao')->nullable();
            $table->date('C010_DataInclusao')->nullable();
            $table->string('C010_UsuarioAlteracao')->nullable();
            $table->date('C010_DataAlteracao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('C010_Despesas');
    }
}
