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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nome');
            $table->integer('idade');
            $table->enum('tabagismo', ['sim', 'nao']);
            $table->integer('peso');
            $table->integer('altura');
            $table->integer('pad');
            $table->integer('pas');
            $table->integer('doenca')->nullable();
            $table->enum('historico', ['sim', 'nao']);
            $table->decimal('risco_vascular', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
