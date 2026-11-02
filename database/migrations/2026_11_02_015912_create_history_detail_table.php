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
        Schema::create('history_detail', function (Blueprint $table) {
            $table->integer('history_detail_id', true);
            $table->integer('history_id')->index();
            $table->string('history_detail_desc', 150)->nullable();
            $table->string('history_detail_photo', 100);
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_detail');
    }
};
