<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_kegiatan_kesehatan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul_kegiatan');
            $table->enum('jenis_kegiatan', ['posyandu', 'lansia', 'imunisasi']);
            $table->string('lokasi');
            $table->date('tanggal');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->text('keterangan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kegiatan_kesehatan');
    }
};
