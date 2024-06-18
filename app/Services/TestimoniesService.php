<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class TestimoniesService
{
    public function get_testimonies()
    {
        return DB::table('testimonies')
            ->select('*')
            ->get();
    }
  
}
