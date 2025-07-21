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
        Schema::create('riwayat_pemeriksaan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('pasien_id')
                ->constrained('pasiens')
                ->onDelete('cascade');
            $table->date('tanggal_pemeriksaan');
            $table->float('berat_badan')->nullable();
            $table->float('tinggi_badan')->nullable();
            $table->text('keluhan')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pemeriksaan');
    }
};
