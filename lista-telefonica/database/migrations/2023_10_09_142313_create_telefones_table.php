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
            $table->id();
            $table->string('codigo_area', 4);
            $table->string('numero_tel', 10);
            $table->unsignedBigInteger('id_contato');
            $table->timestamps();

            $table->foreign('id_contato')
                ->references('id')
                ->on('contatos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefones');
    }
};
