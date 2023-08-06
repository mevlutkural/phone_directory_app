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
        Schema::create('contact_groups', function (Blueprint $table) {
            $table->id('contact_group_id');
            $table->foreignId('contact_id')
                ->constrained('contacts', 'contact_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('group_id')
                ->constrained('groups', 'group_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_groups');
    }
};
