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
        Schema::table('gallery_school', function (Blueprint $table) {
            $table->foreign(['photo_id'], 'gallery_school_ibfk_1')->references(['photo_id'])->on('gallery')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['sch_id'], 'gallery_school_ibfk_2')->references(['sch_id'])->on('school')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery_school', function (Blueprint $table) {
            $table->dropForeign('gallery_school_ibfk_1');
            $table->dropForeign('gallery_school_ibfk_2');
        });
    }
};
