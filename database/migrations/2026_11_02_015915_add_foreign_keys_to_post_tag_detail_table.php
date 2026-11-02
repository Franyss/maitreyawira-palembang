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
        Schema::table('post_tag_detail', function (Blueprint $table) {
            $table->foreign(['post_id'], 'post_tag_detail_ibfk_1')->references(['post_id'])->on('post')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['post_tag_id'], 'post_tag_detail_ibfk_2')->references(['post_tag_id'])->on('post_tag')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_tag_detail', function (Blueprint $table) {
            $table->dropForeign('post_tag_detail_ibfk_1');
            $table->dropForeign('post_tag_detail_ibfk_2');
        });
    }
};
