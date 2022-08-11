<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
        return view('home', [
            'jumlahAdmin' => User::where('level', 'admin')->count(),
            'jumlahPelanggan' => User::where('level', 'pelanggan')->count(),
            'jumlahShop' => User::where('level', 'shop')->count(),
        ]);
    }
}
