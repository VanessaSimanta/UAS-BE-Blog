<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataService;

class DataController extends Controller
{
    private $dataServices;

    public function __construct(DataService $dataServices)
    {
        $this->dataServices = $dataServices;
    }

    public function index(Request $req)
    {
        $data = $this->dataServices->get_data();
        return view('welcome', ['data' => $data]);
    }
}
