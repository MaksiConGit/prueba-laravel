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
        // Schema::drop('cache');
        // Schema::drop('cache_locks');
        // Schema::drop('failed_jobs');
        // Schema::drop('jobs');
        // Schema::drop('job_batches');
        // Schema::drop('migrations');
        // Schema::drop('password_reset_tokens');
        // Schema::drop('sessions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }
};
