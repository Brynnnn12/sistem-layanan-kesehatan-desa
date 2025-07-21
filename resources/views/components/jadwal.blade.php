<section class="w-full py-12 px-4 bg-white text-gray-800">
    <h2 class="text-2xl font-bold mb-4">Jadwal Kegiatan Kesehatan Desa</h2>
    {{-- Tampilkan jadwal dari database atau dummy --}}
    <div class="overflow-x-auto">
        <table class="min-w-full border">
            <thead>
                <tr class="bg-amber-100">
                    <th class="px-4 py-2">Judul Kegiatan</th>
                    <th class="px-4 py-2">Jenis</th>
                    <th class="px-4 py-2">Lokasi</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Jam</th>
                </tr>
            </thead>
            <tbody>
                {{-- Contoh data jadwal --}}
                <tr>
                    <td class="border px-4 py-2">Posyandu Balita RW 02</td>
                    <td class="border px-4 py-2">Posyandu</td>
                    <td class="border px-4 py-2">Dusun Melati</td>
                    <td class="border px-4 py-2">2025-08-10</td>
                    <td class="border px-4 py-2">08:00 - 10:00</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Imunisasi Anak</td>
                    <td class="border px-4 py-2">Imunisasi</td>
                    <td class="border px-4 py-2">Dusun Mawar</td>
                    <td class="border px-4 py-2">2025-08-15</td>
                    <td class="border px-4 py-2">09:00 - 11:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
