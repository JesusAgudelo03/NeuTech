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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('cantidad_stock')->default(0);
            $table->string('modelo', 50);
            $table->text('especificaciones_tecnicas');
            $table->string('imagen', 50);
            $table->foreignId('marca_id')->constrained('marca')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categoria')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
