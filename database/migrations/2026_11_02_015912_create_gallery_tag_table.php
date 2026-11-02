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
        Schema::create('gallery_tag', function (Blueprint $table) {
            $table->integer('gallery_tag_id', true);
            $table->string('gallery_tag_name', 100);
            $table->string('gallery_tag_slug', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_tag');
    }
};
