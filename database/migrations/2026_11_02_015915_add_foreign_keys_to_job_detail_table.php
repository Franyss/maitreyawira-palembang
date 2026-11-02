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
        Schema::table('job_detail', function (Blueprint $table) {
            $table->foreign(['job_id'], 'job_detail_ibfk_1')->references(['job_id'])->on('job')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['job_source_id'], 'job_detail_ibfk_2')->references(['job_source_id'])->on('job_source')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_detail', function (Blueprint $table) {
            $table->dropForeign('job_detail_ibfk_1');
            $table->dropForeign('job_detail_ibfk_2');
        });
    }
};
