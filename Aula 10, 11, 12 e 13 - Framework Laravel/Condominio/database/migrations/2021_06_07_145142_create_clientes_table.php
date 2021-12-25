<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {  
            $table->timestamps();
            $table->string('cpf');
            $table->primary('cpf');
            $table->string('nome')->lenght(40);
            $table->string('endereco');
            $table->string('telefone');
            $table->bigInteger('id_predio')->unsigned();   

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
}
