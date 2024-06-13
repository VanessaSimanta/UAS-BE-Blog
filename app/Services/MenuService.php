<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class MenuService
{
    public function get_menu()
    {
        return DB::table('menu')
            ->select('*')
            ->get();
    }
  
}
