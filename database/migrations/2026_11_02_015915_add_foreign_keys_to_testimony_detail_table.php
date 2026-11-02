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
        Schema::table('testimony_detail', function (Blueprint $table) {
            $table->foreign(['testimony_id'], 'testimony_id#testimony_detail-testimony')->references(['testimony_id'])->on('testimony')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimony_detail', function (Blueprint $table) {
            $table->dropForeign('testimony_id#testimony_detail-testimony');
        });
    }
};
