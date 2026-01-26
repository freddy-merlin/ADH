<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

        // Table catalogue pour les types de projet prédéfinis (many-to-many)
        Schema::create('project_type_catalog', function (Blueprint $table) {
            $table->id();
            $table->string('type_key', 50)->unique(); // web, mobile, plateforme, site, autre
            $table->string('label', 100); // Libellé en français
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Table de liaison pour les types de projet (pivot)
        Schema::create('project_request_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')
                  ->constrained('project_requests')
                  ->onDelete('cascade');
            $table->foreignId('project_type_id')
                  ->constrained('project_type_catalog')
                  ->onDelete('cascade');
            $table->string('custom_value')->nullable(); // Valeur personnalisée si "autre"
            $table->timestamps();
            
            // Empêche les doublons
            $table->unique(['project_request_id', 'project_type_id'], 'project_request_type_unique');
        });

        // Table catalogue pour les fonctionnalités prédéfinies (many-to-many)
        Schema::create('project_feature_catalog', function (Blueprint $table) {
            $table->id();
            $table->string('feature_key', 50)->unique(); // auth, users, dashboard, payment, api
            $table->string('label', 100); // Libellé en français
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // Table de liaison pour les fonctionnalités (pivot)
        Schema::create('project_request_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')
                  ->constrained('project_requests')
                  ->onDelete('cascade');
            $table->foreignId('project_feature_id')
                  ->constrained('project_feature_catalog')
                  ->onDelete('cascade');
            $table->string('custom_value')->nullable(); // Valeur personnalisée si autre
            $table->timestamps();
            
            // Empêche les doublons
            $table->unique(['project_request_id', 'project_feature_id'], 'project_request_feature_unique');
        });

        // Table pour les documents (one-to-many)
        Schema::create('project_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')
                  ->constrained('project_requests')
                  ->onDelete('cascade');
            $table->string('filename', 255);
            $table->string('original_filename', 255);
            $table->string('file_path', 500);
            $table->unsignedInteger('file_size');
            $table->string('mime_type', 100);
            $table->timestamps();
            
            $table->index('project_request_id');
        });

        // Table pour l'historique des statuts (one-to-many)
        Schema::create('project_status_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')
                  ->constrained('project_requests')
                  ->onDelete('cascade');
            $table->string('ancien_statut', 50)->nullable();
            $table->string('nouveau_statut', 50);
            $table->text('commentaire')->nullable();
            $table->string('changed_by', 255)->nullable();
            $table->timestamps();
            
            $table->index('project_request_id');
            $table->index('created_at');
        });

        // Insérer les données initiales
        $this->insertInitialData();
    }

    /**
     * Insert initial data into catalog tables
     */
    protected function insertInitialData(): void
    {
        // Types de projet prédéfinis
        DB::table('project_type_catalog')->insert([
            ['type_key' => 'web', 'label' => 'Application web', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['type_key' => 'mobile', 'label' => 'Application mobile', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['type_key' => 'plateforme', 'label' => 'Plateforme métier', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['type_key' => 'site', 'label' => 'Site web / e-commerce', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['type_key' => 'autre', 'label' => 'Autre', 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Fonctionnalités prédéfinies
        DB::table('project_feature_catalog')->insert([
            ['feature_key' => 'auth', 'label' => 'Authentification', 'order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['feature_key' => 'users', 'label' => 'Gestion des utilisateurs', 'order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['feature_key' => 'dashboard', 'label' => 'Tableaux de bord', 'order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['feature_key' => 'payment', 'label' => 'Paiement', 'order' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['feature_key' => 'api', 'label' => 'Intégration API', 'order' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_status_history');
        Schema::dropIfExists('project_documents');
        Schema::dropIfExists('project_request_features');
        Schema::dropIfExists('project_feature_catalog');
        Schema::dropIfExists('project_request_types');
        Schema::dropIfExists('project_type_catalog');
        Schema::dropIfExists('project_requests');
    }
};