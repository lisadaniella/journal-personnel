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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
    $table->foreignId('id_utilisateur')->constrained('utilisateurs')->onDelete('cascade');
    $table->foreignId('categorie_id')->nullable()->constrained('categories')->nullOnDelete();
    $table->string('titre', 150);
    $table->text('contenu');
    $table->enum('visibilite', ['privee', 'publique'])->default('privee');
    $table->timestamp('date_creation')->useCurrent();
    $table->timestamp('date_modification')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
