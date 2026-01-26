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
        // Table des conversations
        Schema::create('project_conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_request_id')
                  ->constrained('project_requests')
                  ->onDelete('cascade');
            $table->string('conversation_uid', 32)->unique(); // UUID pour le lien public
            $table->string('access_code', 10)->nullable(); // Code d'accès pour l'utilisateur
            $table->boolean('is_active')->default(true);
            $table->timestamp('access_code_expires_at')->nullable();
            $table->timestamps();
            
            $table->index('conversation_uid');
            $table->index('project_request_id');
        });

        // Table des messages
        Schema::create('project_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')
                  ->constrained('project_conversations')
                  ->onDelete('cascade');
            $table->enum('sender_type', ['admin', 'user']);
            $table->foreignId('admin_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('user_email')->nullable(); // Email de l'utilisateur
            $table->text('content');
            $table->boolean('is_read')->default(false);
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            
            $table->index('conversation_id');
            $table->index(['sender_type', 'admin_id']);
            $table->index('created_at');
        });

        // Table pour les pièces jointes des messages
        Schema::create('message_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('message_id')
                  ->constrained('project_messages')
                  ->onDelete('cascade');
            $table->string('filename', 255);
            $table->string('original_filename', 255);
            $table->string('file_path', 500);
            $table->unsignedInteger('file_size');
            $table->string('mime_type', 100);
            $table->timestamps();
            
            $table->index('message_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message_attachments');
        Schema::dropIfExists('project_messages');
        Schema::dropIfExists('project_conversations');
    }
};