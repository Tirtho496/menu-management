<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index',compact('menus'));
    }

    public function addPage()
    {
        $roles = Roles::all();
        return view('admin.menu.add',compact('roles'));
    }

    public function insert(Request $request)
    {
        //
        $menu = new Menu();
        $menu->menu_name = $request->name;
        $menu->role_id = $request->role_id;

        $menu->save();
        return redirect('view-menu')->with('status','New Menu Added Successfully');

    }

    public function delete($id)
    {
        $menu = Menu::find($id);

        $menu->delete();
        return redirect('view-menu')->with('status','Menu Deleted Successfully');
    }
}
