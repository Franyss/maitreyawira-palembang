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
        Schema::create('scholarship', function (Blueprint $table) {
            $table->integer('id_bea', true);
            $table->string('jenjang', 50)->nullable();
            $table->string('nama_siswa', 200);
            $table->string('tempat_lhr', 150);
            $table->date('tanggal_lhr');
            $table->mediumText('alamat');
            $table->string('no_hp_wa', 20)->nullable();
            $table->string('email', 50);
            $table->string('nama_ayah', 200)->nullable();
            $table->string('nama_ibu', 200)->nullable();
            $table->string('no_wa', 20)->nullable();
            $table->string('asal_sekolah', 200)->nullable();
            $table->mediumText('desk_pres')->nullable();
            $table->string('up_doc_bea', 200)->nullable();
            $table->integer('schs_id')->nullable();
            $table->string('gallery', 200)->nullable();
            $table->dateTime('datetime_apply');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship');
    }
};
