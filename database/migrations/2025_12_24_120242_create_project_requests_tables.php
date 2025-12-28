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
        // Table principale pour les demandes de projet
        Schema::create('project_requests', function (Blueprint $table) {
            $table->id();
            
            // Étape 1 : Présentation
            $table->string('prenom', 100);
            $table->string('nom', 100);
            $table->string('organisation', 255);
            $table->string('email', 255);
            $table->string('telephone', 20);
            $table->string('role', 255);
            
            // Étape 2 : Type de projet
            $table->text('type_autre')->nullable();
            
            // Étape 3 : Contexte & objectifs
            $table->text('probleme');
            $table->text('objectifs');
            $table->string('cible', 255);
            
            // Étape 4 : Fonctionnalités
            $table->text('autres_besoins')->nullable();
            
            // Étape 5 : Contraintes
            $table->string('delais', 100)->nullable();
            $table->string('budget', 50)->nullable();
            $table->string('urgence', 50)->nullable();
            
            // Métadonnées
            $table->enum('statut', ['nouveau', 'en_cours', 'analyse', 'accepte', 'refuse', 'termine'])->default('nouveau');
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
            
            // Index
            $table->index('email');
            $table->index('statut');
            $table->index('created_at');
        });

        // Table pour les types de projet
        Schema::create('project_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')->constrained()->onDelete('cascade');
            $table->string('type', 50);
            $table->timestamp('created_at')->useCurrent();
            
            $table->index('project_request_id');
        });

        // Table pour les fonctionnalités
        Schema::create('project_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')->constrained()->onDelete('cascade');
            $table->string('feature', 50);
            $table->timestamp('created_at')->useCurrent();
            
            $table->index('project_request_id');
        });

        // Table pour les documents
        Schema::create('project_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')->constrained()->onDelete('cascade');
            $table->string('filename', 255);
            $table->string('original_filename', 255);
            $table->string('file_path', 500);
            $table->unsignedInteger('file_size');
            $table->string('mime_type', 100);
            $table->timestamp('created_at')->useCurrent();
            
            $table->index('project_request_id');
        });

        // Table pour l'historique des statuts
        Schema::create('project_status_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')->constrained()->onDelete('cascade');
            $table->string('ancien_statut', 50)->nullable();
            $table->string('nouveau_statut', 50);
            $table->text('commentaire')->nullable();
            $table->string('changed_by', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->index('project_request_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_status_history');
        Schema::dropIfExists('project_documents');
        Schema::dropIfExists('project_features');
        Schema::dropIfExists('project_types');
        Schema::dropIfExists('project_requests');
    }
};