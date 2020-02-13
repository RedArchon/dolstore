<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $user = User::find(auth()->id());
        return view('users.profile', [
            'user' => $user,
            'states' => config('app.us_states')
        ]);
    }
    public function updateProfile()
    {
        $user = User::find(auth()->id());
        $user->update(request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip' => ['required'],
            'mailstop' => ['required'],
            'dol_employee' => ['required']
        ]));
        return redirect(route('profile'))->with('message', 'Profile updated sucessfully.');
    }
}
