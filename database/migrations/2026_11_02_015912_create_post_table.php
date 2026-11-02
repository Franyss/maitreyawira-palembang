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
        Schema::create('post', function (Blueprint $table) {
            $table->integer('post_id', true);
            $table->string('title', 150);
            $table->string('slug', 150)->unique();
            $table->text('content');
            $table->string('thumbnail', 100)->nullable();
            $table->unsignedInteger('author_id')->index();
            $table->enum('status', ['Draft', 'Publish'])->default('Publish');
            $table->bigInteger('total_views')->default(0);
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
