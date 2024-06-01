<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Classes;
use App\Models\Comment;
use App\Models\Mengajar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMengajarRequest;
use App\Http\Requests\UpdateMengajarRequest;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Classes::where('user_id', Auth::user()->id)->get();
        return view('mengajar.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($id)
    {
        $class = Classes::findOrFail($id);
        $comment = Comment::with('users')->where('class_id', $id)->get();
        // return $class->id;
        return view('mengajar.detail', ['datas' => $class, 'comments' => $comment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mengajar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:2048'
        ]);

        if ($request->image != '') {
            $imageName = time() . '.' . $request->image->extension();
            $imagePath = 'images/' . $imageName;
            $request->image->move(public_path('images'), $imageName);

            Classes::create([
                'teacher' => $request->teacher,
                'title' => $request->title,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'image' => $imageName,
                'token' => Str::random(5)
            ]);
        }
        $create = Classes::create([
            'teacher' => $request->teacher,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'image' => $request->image,
            'token' => Str::random(5)
        ]);

        $create->save();

        if ($create) {
            return redirect()->route('mengajar.index')->with(['success' => 'Success']);
        }
    }

    public function destroy($id)
    {

        $class = Classes::findOrFail($id);
        Archive::create([
            'teacher' => $class->teacher,
            'description' => $class->description,
            'title' => $class->title,
        ]);
        $class->delete();
        return redirect()->route('mengajar.index')->with(['success' => 'Success']);
    }
}
