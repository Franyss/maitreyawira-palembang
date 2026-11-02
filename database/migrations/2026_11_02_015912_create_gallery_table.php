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
        Schema::create('gallery', function (Blueprint $table) {
            $table->integer('photo_id', true);
            $table->string('title', 200)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('file', 200)->unique();
            $table->enum('type', ['image', 'video-embed'])->default('image');
            $table->enum('status', ['0', '1'])->default('1');
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
