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
        Schema::create('job_detail', function (Blueprint $table) {
            $table->integer('job_detail_id', true);
            $table->integer('job_id')->nullable()->index();
            $table->string('full_name', 200);
            $table->enum('jk', ['l', 'p'])->nullable();
            $table->string('email', 50);
            $table->integer('job_source_id')->index();
            $table->string('cv_file', 200);
            $table->text('notes')->nullable();
            $table->dateTime('datetime_apply');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_detail');
    }
};
