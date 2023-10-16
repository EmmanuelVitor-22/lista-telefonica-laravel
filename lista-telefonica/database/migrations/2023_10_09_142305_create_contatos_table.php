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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->unsignedBigInteger('id_endereco');
            $table->timestamps();

            $table->foreign('id_endereco')
                ->references('id')
                ->on('enderecos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
