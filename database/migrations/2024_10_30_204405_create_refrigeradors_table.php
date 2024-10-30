<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('refrigeradores', function (Blueprint $table) {
        $table->id();
        $table->string('marca');
        $table->integer('capacidad'); // en litros, por ejemplo
        $table->string('tipo'); // por ejemplo: "Doble puerta", "Mini"
        $table->string('eficiencia_energetica'); // Ejemplo: "A+", "B"
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refrigeradors');
    }
};
