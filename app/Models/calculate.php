<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jenis_bbm;

class Calculate extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaKendaraan',
        'tanggal',
        'kilometer_awal',
        'kilometer_akhir',
        'bbm_awal',
        'bbm_akhir',
        'total_biaya',
        'bbm_id',
        'total_jarak',
        'total_bbm',
        'konsumsi_bbm',
    ];

    public function bbm()
    {
        return $this->belongsTo(jenis_bbm::class);
    }

}
