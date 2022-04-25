<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpOption\None;

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
        if (!auth()->user()->isVerify) {
            return redirect("/account/verify");
        }

        $user = User::with("Profile")->where("id", auth()->user()->id)->first();

        if (!$user->Profile || !$user->isProfileComplete) {
            return redirect("/process/step-1");
        }

        return view('dashboard.index');
    }
}
