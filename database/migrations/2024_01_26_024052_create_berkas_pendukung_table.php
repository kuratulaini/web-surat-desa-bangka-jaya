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
        Schema::create('berkas_pendukung', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pengajuan_surat')->nullable()
            ->index('fk_berkas_pendukung_to_pengajuan_surat');
            $table->string('nama_berkas')->nullable();
            $table->string('url_berkas')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_pendukung');
    }
};
