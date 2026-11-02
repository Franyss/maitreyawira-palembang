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
        Schema::create('school', function (Blueprint $table) {
            $table->integer('sch_id', true);
            $table->string('sch_background_header', 100);
            $table->string('sch_font_color', 7);
            $table->string('sch_name', 150);
            $table->text('sch_address')->nullable();
            $table->string('sch_phone', 20)->nullable();
            $table->string('sch_slug', 150)->unique();
            $table->text('sch_opening_speech')->nullable();
            $table->string('sch_img', 100)->nullable();
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school');
    }
};
