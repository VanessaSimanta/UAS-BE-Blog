<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\menu;
use App\Models\AboutUs;
use App\Models\home;
use App\Models\testimonies;


class DataController extends Controller
{
    public function index(Request $req)
    {
        $data = contact::all();
        $menu = menu::all();
        $AboutUs = AboutUs::all();
        $home = home::all();
        $testimonies = testimonies::all();
        
        return view('welcome', ['data' => $data, 'menu' => $menu, 'about_us' => $AboutUs, 'home' => $home, 'testimonies' => $testimonies]);
    }

    public function getKopiInspirasi(Request $req)
    {
        $data = contact::all();
        return view('make-your-own-drink/kopiInspirasi', ['data' => $data]);
    }

    public function getMatchaLatte(Request $req)
    {
        return view('make-your-own-drink/matchaLatte');
    }

    public function getCaramelMacchiato(Request $req)
    {
        return view('make-your-own-drink/caramelMacchiato');
    }
}