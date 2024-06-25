<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }

    public function editprofile()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        return view('settings.ubahprofile', ['user' => $user]);
    }

    public function updateprofile(Request $request)
    {
        // return $request->image;
        $request->validate([
            'name' => 'string',
            'email' => 'email',
            'image' => 'image|max:2048'
        ]);

        if ($request->image != '') {
            $imageName = time() . '.' . $request->image->extension();
            $imagePath = 'images/' . $imageName;
            $request->image->move(public_path('images'), $imageName);

            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'image' => $imageName,
                'email' => $request->email
            ]);
        }

        // User::where('id', Auth::user()->id)->update([
        //     'name' => $request->name,
        //     'image' => $request->image,
        //     'email' => $request->email
        // ]);

        return redirect()->route('settings.index');
    }

    public function editpass()
    {
        return view('settings.ubahpass');
    }

    public function ubahpass(Request $request)
    {
        $request->validate([
            'passold' => ['required', 'string'],
            'passnew' => ['required', 'string'],
            'passconfirm' => ['required', 'same:passnew'],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->passold, $user->password)) {
            return back()->withErrors(['passold' => 'Password Lama Salah']);
        }
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->passnew)

        ]);
        // $user->password = Hash::make($request->passnew);
        // $user->save();

        return redirect()->route('settings.index')->with('success', 'Password Berhasil Diubah.');
    }

    public function forgotpass()
    {
        return view('settings.lupapass');
    }
}
