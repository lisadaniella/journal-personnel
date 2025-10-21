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
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
    $table->foreignId('id_note')->constrained('notes')->onDelete('cascade');
    $table->string('chemin_fichier', 255);
    $table->enum('type_media', ['image','audio','video','autre'])->default('image');
    $table->timestamp('date_ajout')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
