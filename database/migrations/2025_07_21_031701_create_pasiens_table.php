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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama', 50);
            $table->string('nik', 16)->unique();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('jenis_pasien', ['balita', 'ibu_hamil', 'lansia']);
            $table->date('tanggal_lahir');
            $table->string('alamat', 80);
            $table->string('no_telepon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
