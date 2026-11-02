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
        Schema::create('popup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bg_url', 50);
            $table->mediumText('content');
            $table->string('link', 100);
            $table->date('expired_date');
            $table->string('desc', 200)->nullable();
            $table->unsignedTinyInteger('sta')->default(1)->comment('0 = hapus, 1 = aktif, 2 = non aktif');
            $table->unsignedInteger('user_id');
            $table->dateTime('datetime_created')->useCurrent();
            $table->dateTime('datetime_last_updated')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popup');
    }
};
