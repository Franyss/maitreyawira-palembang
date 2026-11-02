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
        Schema::create('gallery_tag_detail', function (Blueprint $table) {
            $table->integer('gallery_tag_detail_id', true);
            $table->integer('photo_id')->index();
            $table->integer('gallery_tag_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_tag_detail');
    }
};
