<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DataService
{
    public function get_data()
    {
        return DB::table('contact')
            ->select('*')
            ->get();
    }
}
