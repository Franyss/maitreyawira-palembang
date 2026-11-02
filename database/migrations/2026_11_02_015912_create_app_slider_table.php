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
        Schema::create('app_slider', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('photo', 150);
            $table->string('title', 150)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('btn_text', 100)->nullable();
            $table->string('btn_link', 225)->nullable();
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
        Schema::dropIfExists('app_slider');
    }
};
