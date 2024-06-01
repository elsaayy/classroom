<?php

namespace App\Http\Controllers;

use App\Models\Join;
use App\Models\User;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    public function index()
    {
        $datas = Join::where('user_id', Auth::user()->id)->get();
        return view('registered.index', ['datas' => $datas]);
    }

    public function store(Request $request)
    {
        $classtoken = Classes::where('token', $request->token)->first();
        if($classtoken == null || $classtoken == ""){
            return back()->with('eror', 'Kode tidak valid');
        }else if($request->token == $classtoken->token){
            Join::updateOrCreate([
                "teacher" => $classtoken->teacher,
                "title" => $classtoken->title,
                "description" => $classtoken->description,
                "image" => $classtoken->image,
                "user_id" => Auth::user()->id,
                "token" => $classtoken->token,
                'class_id' => $classtoken->id
            ]);
            // Classes::where('user_id', Auth::user()->id)->update([
            // ]);
            return redirect()->route('registered.index');
        }else{
            return back()->with('eror', 'Kode tidak valid');
        }
    }

    public function delete(Request $request)
    {
        $joined=Join::where('user_id', Auth::user()->id)->first();
        $joined->delete();
        return redirect()->route('registered.index');
        
    }
}
