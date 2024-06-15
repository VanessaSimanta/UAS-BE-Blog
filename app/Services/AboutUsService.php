<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AboutUsService
{
    public function get_AboutUs()
    {
        return DB::table('AboutUs')
            ->select('*')
            ->get();
    }
  
}
