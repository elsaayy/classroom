<?php

namespace App\Http\Controllers;

use App\Models\Mengajar;
use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $mengajar = Mengajar::all();
        return view('mengajar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMengajarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mengajar $mengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mengajar $mengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMengajarRequest $request, Mengajar $mengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mengajar $mengajar)
    {
        //
    }
}
