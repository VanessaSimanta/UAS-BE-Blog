<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataService;
use App\Services\MenuService;
use App\Services\AboutUsService;


class DataController extends Controller
{
    private $dataServices;
    private $menuServices;
    private $aboutUsServices;


    public function __construct(
        DataService $dataServices,
        MenuService $menuServices,
        AboutUsService $AboutUsService
    ) {
        $this->dataServices = $dataServices;
        $this->menuServices = $menuServices;
        $this->aboutUsServices = $AboutUsService;
    }

    public function index(Request $req)
    {
        $data = $this->dataServices->get_data();
        $menu = $this->menuServices->get_menu();
        $AboutUs = $this->aboutUsServices->get_AboutUs();
        return view('welcome', ['data' => $data, 'menu' => $menu, 'AboutUs' => $AboutUs]);
    }
}
