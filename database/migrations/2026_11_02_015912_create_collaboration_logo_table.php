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
        Schema::create('collaboration_logo', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('img', 50);
            $table->string('description', 200)->nullable();
            $table->unsignedTinyInteger('sta')->default(1);
            $table->dateTime('datetime_created')->useCurrent();
            $table->dateTime('datetime_last_updated')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaboration_logo');
    }
};
