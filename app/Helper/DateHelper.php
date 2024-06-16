<?php

namespace App\Helper;

use Carbon\Carbon;

class DateHelper

{
  public static function formatIndonesianDate($date){
    Carbon::setLocale('id');
    return Carbon::parse($date)->translatedFormat('l, d F Y');
  }
}