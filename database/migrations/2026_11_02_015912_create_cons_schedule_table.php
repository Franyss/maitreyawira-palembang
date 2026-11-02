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
        Schema::create('cons_schedule', function (Blueprint $table) {
            $table->integer('cons_id_scd', true);
            $table->integer('cons_id')->default(0);
            $table->string('nama_siswa_scd', 200)->nullable();
            $table->string('nama_ortu_scd', 200)->nullable();
            $table->text('asal_sekolah_scd')->nullable();
            $table->string('no_wa_ortu_scd', 14)->nullable();
            $table->string('email_scd', 100)->nullable();
            $table->integer('sta')->nullable()->default(0);
            $table->dateTime('datetime_apply')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cons_schedule');
    }
};
