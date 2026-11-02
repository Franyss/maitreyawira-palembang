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
        Schema::create('achievement', function (Blueprint $table) {
            $table->integer('achievement_id', true);
            $table->string('achievement_title', 150)->unique();
            $table->string('achievement_slug', 200)->unique();
            $table->text('achievement_content');
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement');
    }
};
