<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classes;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        $datas = Classes::withCount('users')->where('user_id', Auth::user()->id)->get();
        $warna = ['bg-danger', 'bg-primary', 'bg-warning', 'bg-success', 'bg-secondary'];
        $random = Arr::random($warna);
        foreach ($datas as $data) {
            $student = User::where('class_id', $data->id)->count();
        }
        global $student;
        return view('dashboard.dashboard', ['datas' => $datas, 'random' => $random, 'student' => $student]);
    }
}
