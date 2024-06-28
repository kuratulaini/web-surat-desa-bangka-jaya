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
        Schema::table('antrian', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_antrian_to_users')->references('id')
            ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('id_pengajuan_surat', 'fk_antrian_to_pengajuan_surat')->references('id')
            ->on('pengajuan_surat')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('antrian', function (Blueprint $table) {
            $table->dropForeign('fk_antrian_to_users');

            $table->dropForeign('fk_antrian_to_pengajuan_surat');

        });
    }
};
