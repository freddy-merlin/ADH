<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
         
        DB::table('project_requests')
            ->whereNull('created_at')
            ->update(['created_at' => now(), 'updated_at' => now()]);

        
        DB::table('project_documents')
            ->whereNull('created_at')
            ->update(['created_at' => now(), 'updated_at' => now()]);

         
        DB::table('project_status_history')
            ->whereNull('created_at')
            ->update(['created_at' => now(), 'updated_at' => now()]);
    }

    public function down(): void
    {
        //
    }
};