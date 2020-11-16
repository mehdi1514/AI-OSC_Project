<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Post;
use App\Models\Appointment;

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
        $user_email = auth()->user()->email;

        if($user_email == 'admin@gmail.com')
        {
            $apps = Appointment::all();
            return view('appointments.index')->with('appointments', $apps);
        }

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('posts.index')->with('posts', $user->posts);
    }
}
