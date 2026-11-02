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
        Schema::create('program_detail', function (Blueprint $table) {
            $table->integer('program_detail_id', true);
            $table->integer('program_id')->index();
            $table->mediumText('program_detail_desc')->nullable();
            $table->string('program_detail_content', 225)->nullable();
            $table->string('program_youtube_link', 100)->nullable();
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_detail');
    }
};
