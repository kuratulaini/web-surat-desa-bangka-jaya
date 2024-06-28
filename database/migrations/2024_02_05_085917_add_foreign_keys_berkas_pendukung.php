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
        Schema::table('berkas_pendukung', function (Blueprint $table) {
            $table->foreign('id_pengajuan_surat', 'fk_berkas_pendukung_to_pengajuan_surat')->references('id')
            ->on('pengajuan_surat')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('berkas_pendukung', function (Blueprint $table) {
            $table->dropForeign('fk_berkas_pendukung_to_pengajuan_surat');
        });
    }
};
