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
        Schema::create('history_video', function (Blueprint $table) {
            $table->unsignedSmallInteger('history_video_no')->nullable()->unique();
            $table->string('history_video_url', 100)->nullable()->unique();
            $table->unsignedTinyInteger('sta')->default(1)->index()->comment('0 = nonaktif, 1 = aktif');
            $table->dateTime('datetime_created')->useCurrent();
            $table->dateTime('datetime_last_updated')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_video');
    }
};
