<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arsip = Archive::where('user_id', Auth::user()->id)->get();
        return view('archive.index', ['datas' => $arsip]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function reverse($id)
    {
        $archive_class = Archive::findOrFail($id);
        $class = Classes::insert([
            'id' => $archive_class->id,
            'teacher' => $archive_class->teacher,
            'title' => $archive_class->title,
            'description' =>$archive_class->description,
            'token' => $archive_class->token,
            'image' => $archive_class->image,
            'user_id' => $archive_class->user_id
        ]);

        if($class){
            Archive::where('id', $archive_class->id)->delete();
        }

        return redirect()->route('archive.index');
    }
    
    public function destroy($id)
    {
        Archive::findOrFail($id)->delete();

        return redirect()->route('archive.index')->with(['success' => 'Success']);
    }
}
