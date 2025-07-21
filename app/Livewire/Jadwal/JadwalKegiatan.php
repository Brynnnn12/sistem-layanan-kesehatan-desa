<?php

namespace App\Livewire\Jadwal;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\JadwalKegiatanKesehatan;

class JadwalKegiatan extends Component
{
    use WithPagination;

    public function render()
    {
        $jadwalKegiatan = JadwalKegiatanKesehatan::orderBy('tanggal', 'desc')->paginate(10);
        return view('livewire.jadwal.jadwal-kegiatan', [
            'jadwalKegiatan' => $jadwalKegiatan,
        ]);
    }
}
