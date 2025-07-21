<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;
use Illuminate\Support\Str;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => (string) Str::uuid(),
                'nama' => 'Siti Aminah',
                'nik' => '1234567890123456',
                'jenis_kelamin' => 'P',
                'jenis_pasien' => 'ibu_hamil',
                'tanggal_lahir' => '1990-05-12',
                'alamat' => 'Dusun Melati',
                'no_telepon' => '081234567890',
            ],
            [
                'id' => (string) Str::uuid(),
                'nama' => 'Budi Santoso',
                'nik' => '2345678901234567',
                'jenis_kelamin' => 'L',
                'jenis_pasien' => 'balita',
                'tanggal_lahir' => '2021-08-20',
                'alamat' => 'Dusun Mawar',
                'no_telepon' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'nama' => 'Sukinem',
                'nik' => '3456789012345678',
                'jenis_kelamin' => 'P',
                'jenis_pasien' => 'lansia',
                'tanggal_lahir' => '1950-01-01',
                'alamat' => 'Dusun Anggrek',
                'no_telepon' => '081298765432',
            ],
        ];

        foreach ($data as $pasien) {
            Pasien::create($pasien);
        }
    }
}
