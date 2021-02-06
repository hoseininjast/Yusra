<?php

namespace App\Http\Controllers;

use App\Models\Parts;
use App\Models\Roles;
use App\Models\Works;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WorksController extends Controller
{
    public function All()
    {
        $Works = Works::all();
        return view('Dashboard.Work.All')->with(['Works' => $Works]);
    }

    public function Add()
    {
        return view('Dashboard.Work.Add');
    }

    public function Create(Request $request)
    {
        $request->validate([
            "WorkName" => "required|string",
            "Start" => "required",
            "End" => "nullable",
            "WorkDays" => "nullable",
        ]);
        $Work = Works::create([
            'Name' => $request->WorkName,
            'Status' => 'Working'
        ]);
        foreach ($request->all() as $item => $value) {
            if (preg_match('/Role-.*/',$item)) {
                $Role = explode('-' , $item)[1];
                $Role = Roles::find($Role);
                Parts::create([
                    'Name' => $Role->Name,
                    'WorkID' => $Work->id,
                    'UserID' => $value,
                    'RoleID' => $Role->id,
                    'Description' => 'Starter',
                    'Status' => 'Working' ,
                    'StartDate' => $request->Start
                ]);
            }
        }
        Alert::toast('کار شما با موفقیت ایجاد شد','success');
        return redirect()->route('Dashboard.Work.All');
    }

    public function Edit()
    {

    }

    public function Update()
    {

    }

    public function Delete()
    {

    }
}
