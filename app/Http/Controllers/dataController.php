<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataService;
use App\Services\MenuService;
use App\Services\AboutUsService;
use App\Services\HomeService;


class DataController extends Controller
{
    private $dataServices;
    private $menuServices;
    private $aboutUsServices;
    private $homeServices;


    public function __construct(
        DataService $dataServices,
        MenuService $menuServices,
        AboutUsService $AboutUsService,
        HomeService $homeServices
    ) {
        $this->dataServices = $dataServices;
        $this->menuServices = $menuServices;
        $this->aboutUsServices = $AboutUsService;
        $this->homeServices = $homeServices;
    }

    public function index(Request $req)
    {
        $data = $this->dataServices->get_data();
        $menu = $this->menuServices->get_menu();
        $AboutUs = $this->aboutUsServices->get_about_us();
        $home = $this->homeServices->get_home();
        return view('welcome', ['data' => $data, 'menu' => $menu, 'about_us' => $AboutUs, 'home' => $home]);
    }
}
