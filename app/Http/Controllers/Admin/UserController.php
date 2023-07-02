<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role','!=','3')->get();
        return view('admin.user.index',compact('user'));
    }

    public function addPage()
    {
        $roles = Roles::all();
        return view('admin.user.add',compact('roles'));
    }

    public function insert(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role_id;

        $user->save();
        return redirect('users')->with('status','New User Added Successfully');

    }

    public function delete($id)
    {
        $menu = Menu::find($id);

        $menu->delete();
        return redirect('view-menu')->with('status','Menu Deleted Successfully');
    }
}
