<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //this function index() show user profile.
    public function index()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }


    //this function update() it will update the user information.
    public function update(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $avatarName = $user->id.'_avatar'.time().'.'.$request->file('avatar')->getClientOriginalExtension();
        //upload the provided image
        $request->file('avatar')->move(public_path('avatars'), $avatarName);
        $user->avatar = $avatarName;
        $user->save();

        return redirect()->back()->with('status', 'You have successfully updated profile.');

    }
}
