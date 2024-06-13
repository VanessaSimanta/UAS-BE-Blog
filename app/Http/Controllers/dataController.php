<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataService;
use App\Services\MenuService;

class DataController extends Controller
{
    private $dataServices;
    private $menuServices;

    public function __construct(DataService $dataServices, MenuService $menuServices)
    {
        $this->dataServices = $dataServices;
        $this->menuServices = $menuServices;
    }

    public function index(Request $req)
    {
        $data = $this->dataServices->get_data();
        $menu = $this->menuServices->get_menu();
        return view('welcome', ['data' => $data, 'menu' => $menu]);
    }
}
