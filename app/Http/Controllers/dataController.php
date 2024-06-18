<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\menu;
use App\Models\AboutUs;
use App\Models\home;


class DataController extends Controller
{
    public function index(Request $req)
    {
        $data = contact::all();
        $menu = menu::all();
        $AboutUs = AboutUs::all();
        $home = home::all();
        
        return view('welcome', ['data' => $data, 'menu' => $menu, 'about_us' => $AboutUs, 'home' => $home]);
    }
}