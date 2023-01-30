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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 50);
            $table->string('cpf_cnpj', 14);
            $table->string('rg', 9);
            $table->date('data_nascimento');
            $table->string('estado_civil', 50);
            $table->string('cep', 8);
            $table->string('rua', 255);
            $table->string('bairro', 50);
            $table->string('complemento', 255)->nullable();
            $table->string('contato', 11);

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
        Schema::dropIfExists('clientes');
    }
};
