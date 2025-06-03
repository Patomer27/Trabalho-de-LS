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
        Schema::create('tenis', function (Blueprint $table) {
            $table->id();
            $table->enum('genero', ['masculino', 'feminino', 'infantil']);
            $table->string('imagem'); // caminho ou nome do arquivo da imagem
            $table->decimal('preco', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenis');
    }
};
