<?php

namespace App\Http\Controllers;


use App\Models\Report;
use App\Models\Roles;
use App\Models\Menu;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('admin.report.index',compact('reports'));
    }

    public function addPage()
    {
        $menus = Menu::all();
        return view('admin.report.add',compact('menus'));
    }

    public function insert(Request $request)
    {
        //
        $report = new Report();
        $report->name = $request->name;
        $report->menu_id = $request->menu_id;

        $report->save();
        return redirect('view-report')->with('status','New Report Added Successfully');

    }

    public function delete($id)
    {
        $report = Report::find($id);

        $report->delete();
        return redirect('view-report')->with('status','Report Deleted Successfully');
    }
}
