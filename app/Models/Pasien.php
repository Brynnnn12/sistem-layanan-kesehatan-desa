<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */

    protected $casts = [
        'tanggal_lahir' => 'date',
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the riwayat pemeriksaan for the pasien.
     */
    public function riwayatPemeriksaan()
    {
        return $this->hasMany(RiwayatPemeriksaan::class, 'pasien_id');
    }
}
