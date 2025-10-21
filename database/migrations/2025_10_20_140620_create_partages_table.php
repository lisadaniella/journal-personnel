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
        Schema::create('partages', function (Blueprint $table) {
            $table->id();
    $table->foreignId('id_note')->constrained('notes')->onDelete('cascade');
    $table->foreignId('id_utilisateur_destinataire')->constrained('utilisateurs')->onDelete('cascade');
    $table->enum('droits', ['lecture','modification'])->default('lecture');
    $table->timestamp('date_partage')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partages');
    }
};
