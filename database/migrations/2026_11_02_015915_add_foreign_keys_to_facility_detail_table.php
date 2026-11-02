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
        Schema::table('facility_detail', function (Blueprint $table) {
            $table->foreign(['facility_id'], 'facility_detail_ibfk_1')->references(['facility_id'])->on('facility')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('facility_detail', function (Blueprint $table) {
            $table->dropForeign('facility_detail_ibfk_1');
        });
    }
};
