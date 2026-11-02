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
        Schema::table('history_detail', function (Blueprint $table) {
            $table->foreign(['history_id'], 'history_detail_ibfk_1')->references(['history_id'])->on('history')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('history_detail', function (Blueprint $table) {
            $table->dropForeign('history_detail_ibfk_1');
        });
    }
};
