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
        Schema::create('service_hour', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('service_day', 100);
            $table->time('hour_from')->nullable();
            $table->time('hour_to')->nullable();
            $table->unsignedTinyInteger('sta')->default(1);
            $table->dateTime('datetime_last_updated')->useCurrentOnUpdate()->nullable();
            $table->dateTime('datetime_created')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_hour');
    }
};
