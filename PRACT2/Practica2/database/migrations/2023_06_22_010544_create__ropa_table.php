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
        Schema::create('ropa', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('temporada');
            $table->string('categoria');
            $table->float('talla')->nullable();
            $table->integer('stock')->nullable();
            $table->float('precio')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_ropa');
    }
};
