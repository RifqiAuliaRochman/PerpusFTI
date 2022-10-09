<?php

namespace App\Http\Controllers;

use App\Models\Buku;
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
        $bukus = Buku::paginate(20);
        return view('home', compact('bukus'));
    }
    public function dashbuku()
    {
        $bukus = Buku::paginate(20);
        return view('dashboard.buku', compact('bukus'));
    }
}
