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
        Schema::create('subsector2s', function (Blueprint $table) {
            $table->id();
            $table->integer('id_sector');
            $table->integer('id_subsector1');
            $table->integer('id_subsector2');
            $table->string('denominacion', 255);
            $table->string('sigla', 31);
            $table->timestamp('creado_en');
            $table->unique(['id_sector', 'id_subsector1', 'id_subsector2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsector2s');
    }
};
