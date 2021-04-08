<?php

namespace App\Http;

use Carbon\Carbon;

class Helpers {
    public static function dateFormat($date): string {
        return Carbon::parse($date)->format('G:i d-m-Y');
    }
}
