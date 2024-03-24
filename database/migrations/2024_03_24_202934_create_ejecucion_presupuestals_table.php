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
        Schema::create('ejecucion_presupuestals', function (Blueprint $table) {
            $table->id();
            $table->integer('gestion');
            $table->date('fecha_de_corte');
            $table->integer('entidad');
            $table->string('cat_prg', 255);
            $table->integer('programa');
            $table->string('proyecto', 255);
            $table->string('actividad', 255);
            $table->string('descripcion_cat_prg', 255);
            $table->decimal('presupuesto_inicial', 10, 2);
            $table->decimal('mod_aprobadas', 10, 2);
            $table->decimal('presup_vig', 10, 2);
            $table->decimal('preventivo', 10, 2);
            $table->decimal('compromiso', 10, 2);
            $table->decimal('devengado', 10, 2);
            $table->decimal('pagado', 10, 2);
            $table->decimal('saldo_por_pagar', 10, 2);
            $table->decimal('porcen', 5, 2);
            $table->decimal('saldo_deveng', 10, 2);
            $table->boolean('programado_para_la_gestion')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejecucion_presupuestals');
    }
};
