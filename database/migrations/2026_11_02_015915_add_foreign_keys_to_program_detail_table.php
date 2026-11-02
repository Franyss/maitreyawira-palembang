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
        Schema::table('program_detail', function (Blueprint $table) {
            $table->foreign(['program_id'], 'program_id#program_detail-program')->references(['program_id'])->on('program')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('program_detail', function (Blueprint $table) {
            $table->dropForeign('program_id#program_detail-program');
        });
    }
};
