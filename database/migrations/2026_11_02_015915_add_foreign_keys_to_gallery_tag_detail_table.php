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
        Schema::table('gallery_tag_detail', function (Blueprint $table) {
            $table->foreign(['gallery_tag_id'], 'gallery_tag_detail_ibfk_1')->references(['gallery_tag_id'])->on('gallery_tag')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['photo_id'], 'gallery_tag_detail_ibfk_2')->references(['photo_id'])->on('gallery')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery_tag_detail', function (Blueprint $table) {
            $table->dropForeign('gallery_tag_detail_ibfk_1');
            $table->dropForeign('gallery_tag_detail_ibfk_2');
        });
    }
};
