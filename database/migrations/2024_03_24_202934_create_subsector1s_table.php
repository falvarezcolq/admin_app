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
        Schema::create('subsector1s', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sector');
            $table->integer('id_subsector1');
            $table->string('denominacion', 255);
            $table->string('sigla', 31);
            $table->timestamp('creado_en');
            $table->unique(['id_subsector1', 'id_sector']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsector1s');
    }
};
