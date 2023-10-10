<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id('id_contato');
            $table->string('nome', 100);
            $table->string('email',100);
            $table->unsignedBigInteger('id_endereco');
            $table->foreignId('id_endereco')
                  ->constrained('enderecos')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->timestamps();
        });

//        Schema::table('contatos', function (Blueprint $table) {
//            $table->renameColumn('id', 'id_contato');
//        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
