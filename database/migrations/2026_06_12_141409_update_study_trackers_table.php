<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_trackers', function (Blueprint $table) {

            $table->foreignId('user_id')->nullable()->after('id');

            $table->text('description')->nullable()->after('topic');

            $table->integer('hours_required')->default(0)->after('description');

            $table->text('remarks')->nullable()->after('completion_status');

        });
    }

    public function down(): void
    {
        Schema::table('study_trackers', function (Blueprint $table) {

            $table->dropColumn([
                'user_id',
                'description',
                'hours_required',
                'remarks'
            ]);

        });
    }
};