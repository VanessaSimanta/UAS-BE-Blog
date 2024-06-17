<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class HomeService
{
    public function get_home()
    {
        return DB::table('home')
            ->select('*')
            ->get();
    }
  
}