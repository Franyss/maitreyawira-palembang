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
        Schema::table('job_school', function (Blueprint $table) {
            $table->foreign(['job_id'], 'job_school_ibfk_1')->references(['job_id'])->on('job')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['sch_id'], 'job_school_ibfk_2')->references(['sch_id'])->on('school')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_school', function (Blueprint $table) {
            $table->dropForeign('job_school_ibfk_1');
            $table->dropForeign('job_school_ibfk_2');
        });
    }
};
