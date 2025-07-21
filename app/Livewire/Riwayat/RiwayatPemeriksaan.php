<?php

namespace App\Livewire\Riwayat;

use Livewire\Component;
use Livewire\WithPagination;

class RiwayatPemeriksaan extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'tailwind';

    // Hapus queryString untuk menghilangkan parameter URL
    // protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $sanitizedSearch = addcslashes($this->search, '%_');

        $riwayat = \App\Models\RiwayatPemeriksaan::with('pasien')
            ->where(function ($query) use ($sanitizedSearch) {
                $query->whereHas('pasien', function ($q) use ($sanitizedSearch) {
                    $q->where('nama', 'like', '%' . $sanitizedSearch . '%');
                })
                    ->orWhere('keluhan', 'like', '%' . $sanitizedSearch . '%')
                    ->orWhere('catatan', 'like', '%' . $sanitizedSearch . '%');
            })
            ->latest('tanggal_pemeriksaan')
            ->paginate(10);

        return view('livewire.riwayat.riwayat-pemeriksaan', compact('riwayat'));
    }
}
