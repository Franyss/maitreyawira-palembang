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
        Schema::create('testimony_detail', function (Blueprint $table) {
            $table->integer('testimony_detail_id', true);
            $table->integer('testimony_id')->index();
            $table->mediumText('testimony_detail_desc')->nullable();
            $table->string('testimony_detail_content', 225)->nullable();
            $table->string('testimony_detail_youtube_link', 100)->nullable();
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimony_detail');
    }
};
