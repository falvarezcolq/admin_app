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
        Schema::create('cat_programaticas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_programa')->unique();
            $table->string('cod_o', 10);
            $table->string('denominacion', 255);
            $table->string('finalidad_funcion', 255);
            $table->integer('id_sector');
            $table->timestamp('creado_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_programaticas');
    }
};
