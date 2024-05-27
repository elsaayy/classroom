<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'string'
        ]);

        // return $request->route('id');

        Comment::create([
            'content' => $request->content,
            'class_id' => $request->route('id'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('mengajar.detail', $request->route('id'))->with(['success' => 'Success']);
    }
}
