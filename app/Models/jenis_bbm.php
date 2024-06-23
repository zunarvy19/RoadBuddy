<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Calculate;

class jenis_bbm extends Model
{
    use HasFactory;

    protected $table = 'jenis_bbms';

    protected $fillable = [
        
    ];


    public function vendor(){
        return $this -> belongsTo(Vendor::class);
    }

    public function calculate(){
        return $this -> hasMany(Calculate::class);
    }
}
