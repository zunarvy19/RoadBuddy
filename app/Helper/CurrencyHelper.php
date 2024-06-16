<?php

namespace App\Helpers;

use Carbon\Carbon;

class CurrencyHelper
{
    public static function formatRupiah($value)
    {
        return 'Rp' . number_format($value, 2, ',', '.');
    }
}
