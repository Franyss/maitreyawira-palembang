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
        Schema::create('custom_page', function (Blueprint $table) {
            $table->increments('custom_page_id');
            $table->string('link_title', 50);
            $table->unsignedTinyInteger('link_type')->comment('1 = link halaman custom, 2 = link manual');
            $table->string('link', 100)->nullable();
            $table->string('title', 150)->nullable();
            $table->string('slug', 150)->nullable()->unique();
            $table->string('header_background', 100)->nullable()->comment('lokasi folder di uploads/custom_page');
            $table->string('font_color', 7)->nullable();
            $table->string('thumbnail', 150)->nullable()->comment('lokasi folder di uploads/custom_page');
            $table->text('content')->nullable();
            $table->unsignedInteger('creator_id')->index();
            $table->unsignedTinyInteger('sta')->default(1)->index()->comment('0 = nonaktif, 1 = aktif');
            $table->dateTime('datetime_last_updated')->useCurrentOnUpdate()->nullable();
            $table->dateTime('datetime_created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_page');
    }
};
