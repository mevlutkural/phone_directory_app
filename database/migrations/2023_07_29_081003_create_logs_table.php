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
        Schema::create('logs', function (Blueprint $table) {
            $table->id('log_id');
            $table->foreignId('user_id')
                ->constrained('users', 'user_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('content');
            $table->enum('type', ['create', 'read', 'update', 'delete', 'other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
