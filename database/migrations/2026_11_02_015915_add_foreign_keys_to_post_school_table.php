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
        Schema::table('post_school', function (Blueprint $table) {
            $table->foreign(['post_id'], 'post_school_ibfk_1')->references(['post_id'])->on('post')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['sch_id'], 'post_school_ibfk_2')->references(['sch_id'])->on('school')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_school', function (Blueprint $table) {
            $table->dropForeign('post_school_ibfk_1');
            $table->dropForeign('post_school_ibfk_2');
        });
    }
};
