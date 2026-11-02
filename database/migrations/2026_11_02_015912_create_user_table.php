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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->unsignedInteger('access_id')->index();
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('phone', 20)->nullable()->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('avatar', 100)->nullable();
            $table->dateTime('datetime_last_login')->nullable();
            $table->dateTime('datetime_last_updated')->nullable();
            $table->dateTime('datetime_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
