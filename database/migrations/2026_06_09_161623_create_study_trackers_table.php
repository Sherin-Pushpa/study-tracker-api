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
        Schema::create('study_trackers', function (Blueprint $table) {
            $table->id();
            $table->string('subject_name');
            $table->string('topic');
            $table->integer('hours_studied');
            $table->string('completion_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_trackers');
    }
};
