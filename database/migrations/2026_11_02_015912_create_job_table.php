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
        Schema::create('job', function (Blueprint $table) {
            $table->integer('job_id', true);
            $table->string('title', 200)->unique();
            $table->string('slug', 200)->unique();
            $table->text('description')->nullable();
            $table->text('spesification')->nullable();
            $table->dateTime('datetime_open');
            $table->dateTime('datetime_close');
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
        Schema::dropIfExists('job');
    }
};
