<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaVendor',
    ];

    public function jenisBbm()
    {
        return $this->hasMany(jenis_bbm::class);
    }
}
