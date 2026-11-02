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
        Schema::table('custom_page', function (Blueprint $table) {
            $table->foreign(['creator_id'], 'creator_id#custom_page-user')->references(['user_id'])->on('user')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('custom_page', function (Blueprint $table) {
            $table->dropForeign('creator_id#custom_page-user');
        });
    }
};
