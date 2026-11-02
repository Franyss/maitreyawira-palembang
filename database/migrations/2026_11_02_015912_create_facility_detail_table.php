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
        Schema::create('facility_detail', function (Blueprint $table) {
            $table->integer('facility_detail_id', true);
            $table->integer('facility_id')->index();
            $table->string('facility_detail_desc', 250);
            $table->string('facility_detail_content', 200);
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_detail');
    }
};
