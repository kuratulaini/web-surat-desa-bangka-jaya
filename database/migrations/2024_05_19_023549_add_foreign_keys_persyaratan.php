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
        Schema::table('persyaratan', function (Blueprint $table) {
            $table->foreign('layanan_id', 'fk_persyaratan_to_layanan')->references('id')
            ->on('layanan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('persyaratan', function (Blueprint $table) {
            $table->dropForeign('fk_persyaratan_to_layanan');
        });
    }
};
