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
        Schema::create('consultation_set', function (Blueprint $table) {
            $table->integer('cons_id', true);
            $table->string('jenjang', 200)->nullable();
            $table->string('cons_jen_jad', 200)->nullable();
            $table->string('cons_hari', 50)->nullable();
            $table->date('cons_tanggal')->nullable();
            $table->time('cons_jam')->nullable();
            $table->integer('sta')->nullable()->default(0);
            $table->dateTime('datetime_apply')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_set');
    }
};
