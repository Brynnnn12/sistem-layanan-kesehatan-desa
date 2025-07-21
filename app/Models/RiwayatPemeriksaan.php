<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPemeriksaan extends Model
{
    use SoftDeletes, HasUuids;

    protected $table = 'riwayat_pemeriksaan';

    protected $fillable = [
        'pasien_id',
        'tanggal_pemeriksaan',
        'berat_badan',
        'tinggi_badan',
        'keluhan',
        'catatan',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
