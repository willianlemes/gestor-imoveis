<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('codigo');
            $table->timestamps();
            $table->string('cliente',1);
            $table->string('proprietario',1);
            $table->string('corretor',1);
            $table->string('interessado',1);
            $table->string('outro',1);
            $table->string('tipo',1);
            $table->string('nome_razaoSocial',255);
            $table->string('apelido_nomeFantasia',255);
            $table->string('cpf_cnpj',14)->nullable();
            $table->string('rg_ie',12)->nullable();
            $table->date('data_nasc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
