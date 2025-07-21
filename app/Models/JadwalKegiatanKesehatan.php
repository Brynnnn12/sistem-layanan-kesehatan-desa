<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalKegiatanKesehatan extends Model
{
    use SoftDeletes, HasUuids;
    protected $table = 'jadwal_kegiatan_kesehatan';

    protected $fillable = [
        'judul_kegiatan',
        'jenis_kegiatan',
        'lokasi',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'keterangan',
    ];
}
