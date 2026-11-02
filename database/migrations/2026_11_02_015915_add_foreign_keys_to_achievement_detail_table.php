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
        Schema::table('achievement_detail', function (Blueprint $table) {
            $table->foreign(['achievement_id'], 'achievement_id#achievement_detail-achievement')->references(['achievement_id'])->on('achievement')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achievement_detail', function (Blueprint $table) {
            $table->dropForeign('achievement_id#achievement_detail-achievement');
        });
    }
};
