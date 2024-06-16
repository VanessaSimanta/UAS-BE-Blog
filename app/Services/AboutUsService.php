<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AboutUsService
{
    public function get_about_us()
    {
        return DB::table('about_us')
            ->select('*')
            ->get();
    }
  
}
