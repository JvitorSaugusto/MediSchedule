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
        Schema::create('doctor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialty_id')->constrained('specialty')->cascadeOnDelete();
            $table->string('name');
            $table->string('crm');
            $table->string('phone');
            $table->timestamp('work_start_time');
            $table->timestamp('work_end_time');
            $table->integer('slot_duration');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor');
    }
};
