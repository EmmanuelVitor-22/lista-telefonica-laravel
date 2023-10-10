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
        Schema::create('telefones', function (Blueprint $table) {
            $table->id('id_telefone');
            $table->string('codigo_area', 4);
            $table->string('numero', 10);
            $table->unsignedBigInteger('id_contato');
            $table->timestamps();

            $table->foreign('id_contato')
                ->references('id_contato')
                ->on('contatos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
//        Schema::table('telefones', function (Blueprint $table) {
//            $table->renameColumn('id', 'id_telefone');
//        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefones');
    }
};
