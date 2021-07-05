<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    public function Add($id){
        $Reports = Report::where([ ['WorkID' , $id] , ['UserID' , \Auth::id()] ])->get();
        return view('Dashboard.Employee.Work.Report')->with(['WorkID' => $id , 'Reports' => $Reports]);
    }

    public function Create(Request $request){
        $request->validate([
            'Description' => 'required|string',
            'WorkID' => 'required|integer',
        ]);
        Report::create([
            'Description' => $request->Description,
            'UserID' => \Auth::id(),
            'WorkID' => $request->WorkID,
        ]);
        Alert::toast('گزارش شما ثبت شد' , 'success');
        return redirect()->back();
    }
}
