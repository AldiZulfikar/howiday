<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::;
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home', [
            'items' => $items,
            // 'users' => $users
        ]);
    }
}
