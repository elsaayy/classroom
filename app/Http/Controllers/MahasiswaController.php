<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request){

        $validateData = $request->validate([

            'nama' => 'string|required',
            'nim' => 'string|required|max:10|unique:mahasiswas',
            'telepon' => 'string|required|max:13',
            'alamat' => 'string|required'
        ]);

        Mahasiswa::create($validateData);

        return to_route('mahasiswa.index');
    }
}
