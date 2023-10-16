<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 100);
            $table->string('numero', 10);
            $table->string('complemento', 256)->nullable();
            $table->string('cep', 10);
            $table->string('cidade', 100);
            $table->string('estado', 50);
            $table->timestamps();
        });

////         Agora, vamos renomear a coluna de chave primária para "id_endereco"
//        Schema::table('enderecos', function (Blueprint $table) {
//            $table->renameColumn('id', 'id_endereco');
//        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
