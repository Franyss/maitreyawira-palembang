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
        Schema::create('app_menu', function (Blueprint $table) {
            $table->integer('menu_id', true);
            $table->string('title', 150);
            $table->string('slug', 150)->nullable()->unique();
            $table->string('link', 150)->nullable();
            $table->string('background_header', 100)->nullable();
            $table->string('font_color', 7)->nullable();
            $table->integer('parent_id');
            $table->unsignedTinyInteger('allow_edit');
            $table->enum('status', ['0', '1'])->default('1');
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_menu');
    }
};
