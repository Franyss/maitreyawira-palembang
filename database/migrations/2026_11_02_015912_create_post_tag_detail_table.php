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
        Schema::create('post_tag_detail', function (Blueprint $table) {
            $table->integer('post_tag_detail_id', true);
            $table->integer('post_id')->index();
            $table->integer('post_tag_id')->index();

            $table->index(['post_id'], 'post_id_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag_detail');
    }
};
