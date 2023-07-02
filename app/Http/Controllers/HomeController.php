<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $menus = Menu::where('role_id',Auth::user()->roles->id)->get();
        
        return view('home',compact('menus'));
    }

    public function viewReport($id)
    {
        $reports = Report::where('menu_id',$id)->get();
        
        return view('report',compact('reports'));
    }
}
