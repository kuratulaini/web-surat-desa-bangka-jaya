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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
            ->index('fk_detail_user_to_users');
            $table->timestamp('tanggal_lahir')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nomor_telpon')->nullable();
            $table->tinyInteger('role')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_user');
    }
};
