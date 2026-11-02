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
        Schema::create('student_reg', function (Blueprint $table) {
            $table->integer('id_peserta_didik', true);
            $table->string('nama_lengkap', 200)->nullable();
            $table->string('nama_panggilan', 100)->nullable();
            $table->char('nik', 16)->nullable();
            $table->string('jenkel', 50)->nullable();
            $table->string('tempat_lhr', 50)->nullable();
            $table->date('tanggal_lhr')->nullable();
            $table->string('status_dikeluarga', 100)->nullable();
            $table->string('agama', 20)->nullable();
            $table->string('gol_darah', 20)->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->text('penyakit')->nullable();
            $table->string('bahasa', 300)->nullable();
            $table->string('tinggal_dengan', 500)->nullable();
            $table->mediumText('alamat')->nullable();
            $table->string('transportasi', 500)->nullable();
            $table->string('jarak_sekolah', 100)->nullable();
            $table->string('waktu_tempuh', 100)->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('kewarganegaraan', 50)->nullable();
            $table->integer('lev_ujian_HSK')->nullable();
            $table->integer('nilai_HSK')->nullable();
            $table->char('nisn', 30)->nullable();
            $table->string('nama_ayah', 200)->nullable();
            $table->string('tempat_lhr_ayah', 300)->nullable();
            $table->date('tanggal_lhr_ayah')->nullable();
            $table->string('pekerjaan_ayah', 500)->nullable();
            $table->string('pendidikan_ayah', 200)->nullable();
            $table->mediumText('alamat_ayah')->nullable();
            $table->char('no_wa_ayah', 20)->nullable();
            $table->string('agama_ayah', 20)->nullable();
            $table->string('nama_ibu', 200)->nullable();
            $table->string('tempat_lhr_ibu', 300)->nullable();
            $table->date('tanggal_lhr_ibu')->nullable();
            $table->string('pekerjaan_ibu', 500)->nullable();
            $table->string('pendidikan_ibu', 200)->nullable();
            $table->mediumText('alamat_ibu')->nullable();
            $table->string('no_wa_ibu', 20)->nullable();
            $table->string('agama_ibu', 20)->nullable();
            $table->string('nama_wali', 20)->nullable();
            $table->string('tempat_lhr_wali', 20)->nullable();
            $table->date('tanggal_lhr_wali')->nullable();
            $table->string('pekerjaan_wali', 20)->nullable();
            $table->string('pendidikan_wali', 20)->nullable();
            $table->mediumText('alamat_wali')->nullable();
            $table->string('no_wa_wali', 20)->nullable();
            $table->string('agama_wali', 20)->nullable();
            $table->string('jenjang', 100)->nullable();
            $table->integer('daftar_dikelas')->nullable();
            $table->string('mulai_belajar', 100)->nullable();
            $table->string('nama_asal_sek', 200)->nullable();
            $table->mediumText('alamat_asal_sek')->nullable();
            $table->string('thn_no_STTB', 50)->nullable();
            $table->string('nama_sek_asal', 50)->nullable();
            $table->date('tanggal_pindah')->nullable();
            $table->string('dari_tingkat', 50)->nullable();
            $table->string('up_payment', 200)->nullable();
            $table->string('up_doc', 200)->nullable();
            $table->string('up_akte', 200)->nullable();
            $table->string('up_kk', 200)->nullable();
            $table->string('up_ktp_ayah', 200)->nullable();
            $table->string('up_ktp_ibu', 200)->nullable();
            $table->string('up_ktp_wali', 200)->nullable();
            $table->string('up_foto', 200)->nullable();
            $table->string('up_foto_ayah', 200)->nullable();
            $table->string('up_foto_ibu', 200)->nullable();
            $table->string('up_raport', 200)->nullable();
            $table->string('up_ijazah', 200)->nullable();
            $table->string('up_nisn', 200)->nullable();
            $table->string('up_dok', 200)->nullable();
            $table->year('year_reg')->nullable();
            $table->integer('sta_daftar')->nullable()->default(1);
            $table->integer('sta_ppdb')->nullable()->default(0);
            $table->date('tgl_daftar')->nullable();
            $table->dateTime('datetime_apply')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_reg');
    }
};
