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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();

            $table->string("pes_nome", 45);
            $table->text("pes_observacao")->nullable();
            $table->boolean("pes_viva")->default(1);   // <- corrigido
            $table->integer("pes_dtNasc");
            $table->date("pes_agendamento")->nullable();
            $table->bigInteger("pes_codigobarras")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa');
    }
};