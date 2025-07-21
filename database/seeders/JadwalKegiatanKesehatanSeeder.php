<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalKegiatanKesehatan;
use Illuminate\Support\Str;

class JadwalKegiatanKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => (string) Str::uuid(),
                'judul_kegiatan' => 'Posyandu Balita RW 02',
                'jenis_kegiatan' => 'posyandu',
                'lokasi' => 'Dusun Melati',
                'tanggal' => '2025-08-10',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
                'keterangan' => 'Kegiatan rutin setiap bulan.',
            ],
            [
                'id' => (string) Str::uuid(),
                'judul_kegiatan' => 'Imunisasi Anak',
                'jenis_kegiatan' => 'imunisasi',
                'lokasi' => 'Dusun Mawar',
                'tanggal' => '2025-08-15',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'keterangan' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'judul_kegiatan' => 'Pemeriksaan Lansia',
                'jenis_kegiatan' => 'lansia',
                'lokasi' => 'Dusun Anggrek',
                'tanggal' => '2025-08-20',
                'jam_mulai' => '07:30:00',
                'jam_selesai' => '09:30:00',
                'keterangan' => 'Cek kesehatan lansia.',
            ],
        ];

        foreach ($data as $jadwal) {
            JadwalKegiatanKesehatan::create($jadwal);
        }
    }
}
