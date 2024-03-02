<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $datas = Classes::get();

        return view('dashboard.dashboard', ['datas' => $datas]);
    }
}
