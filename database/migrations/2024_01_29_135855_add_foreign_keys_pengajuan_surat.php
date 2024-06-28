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
        Schema::table('pengajuan_surat', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_pengajuan_surat_to_users')->references('id')
            ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('layanan_id', 'fk_pengajuan_surat_to_layanan')->references('id')
            ->on('layanan')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan_surat', function (Blueprint $table) {
            $table->dropForeign('fk_pengajuan_surat_to_users');

            $table->dropForeign('fk_pengajuan_surat_to_layanan');
        });
    }
};
