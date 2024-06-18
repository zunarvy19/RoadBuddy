<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jenis_bbm;
use Carbon\Carbon;


class Calculate extends Model
{
    use HasFactory;

    protected $table = 'calculates';

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
        'user_id'
    ];

    public function getTanggalFormattedAttribute()
    {
        return Carbon::parse($this->tanggal)->translatedFormat('l, d F Y');
    }

    public function bbm()
    {
        return $this->belongsTo(jenis_bbm::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
