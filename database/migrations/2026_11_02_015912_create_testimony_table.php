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
        Schema::create('testimony', function (Blueprint $table) {
            $table->integer('testimony_id', true);
            $table->string('testimony_title', 150)->unique();
            $table->string('testimony_slug', 200)->unique();
            $table->text('testimony_content');
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimony');
    }
};
