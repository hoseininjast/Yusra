<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Parts;
use App\Models\Roles;
use App\Models\Works;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WorksController extends Controller
{
    public function All()
    {
        if (Auth::user()->Permission == 'Admin') {
            $Works = Works::all();
            return view('Dashboard.Work.All')->with(['Works' => $Works]);
        }else{
            $Parts = Parts::where('UserID' , \Auth::id())->get();
            return view('Dashboard.Employee.Work.All')->with(['Parts' => $Parts]);
        }
        

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
            'Status' => 'Working',
            'StartDate' => $request->Start,
            'EndDate' => $request->End,
            'WorkDays' => $request->WorkDays,
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
                Notification::create([
                    'UserID' => $value,
                    'WorkID' => $Work->id,
                    'Description' => 'وظیفه جدیدی برای شما ایجاد شده است',
                    'Status' => 'New',
                ]);
            }
        }
        Alert::toast('کار شما با موفقیت ایجاد شد','success');
        return redirect()->route('Dashboard.Work.All');
    }

    public function Edit($id)
    {
        $Work = Works::find($id);
        return view('Dashboard.Work.Edit')->with(['Work' => $Work]);
    }

    public function Update($id , Request $request)
    {
        $Work = Works::find($id);
        $request->validate([
            "WorkName" => "required|string",
            "Start" => "required",
            "End" => "nullable",
            "WorkDays" => "nullable",
        ]);
        $Work = Works::find($id)->update([
            'Name' => $request->WorkName,
            'StartDate' => $request->Start,
            'EndDate' => $request->End,
            'WorkDays' => $request->WorkDays,
        ]);
        $Work = Works::find($id);

        foreach ($request->all() as $item => $value) {
            if (preg_match('/Role-.*/', $item)) {
                $Role = explode('-', $item)[1];
                $Role = Roles::find($Role);

                if (Parts::where([ ['WorkID' , $Work->id] , ['RoleID' , $Role->id ] ])->count() > 0) {
                    $Part = Parts::where([['WorkID', $Work->id], ['RoleID', $Role->id, ['UserID', $value]]])->first();
                    Notification::create([
                        'UserID' => $Part->UserID,
                        'WorkID' => $Work->id,
                        'Description' => 'کار از شما حذف شد!!!',
                        'Status' => 'New',
                    ]);

                    $Part->UserID = $value;
                    $Part->save();
                    Notification::create([
                        'UserID' => $value,
                        'WorkID' => $Work->id,
                        'Description' => 'وظیفه جدیدی برای شما ایجاد شده است',
                        'Status' => 'New',
                    ]);

                }else {
                    Parts::create([
                        'Name' => $Role->Name,
                        'WorkID' => $Work->id,
                        'UserID' => $value,
                        'RoleID' => $Role->id,
                        'Description' => 'Starter',
                        'Status' => 'Working',
                        'StartDate' => $request->Start
                    ]);
                    Notification::create([
                        'UserID' => $value,
                        'WorkID' => $Work->id,
                        'Description' => 'وظیفه جدیدی برای شما ایجاد شده است',
                        'Status' => 'New',
                    ]);
                }
            }
        }
        Alert::toast('کار مورد نظر شما با موفقیت بروزرسانی شد' , 'success');
        return redirect()->back();

    }

    public function Delete($id)
    {
        $Work = Works::find($id);
        $Parts = Parts::where('WorkID' , $Work->id)->delete();
        $Work->delete();
        Alert::toast('کار مورد نظر شما با موفقیت حذف شد' , 'success');
        return redirect()->back();
    }

    public function View($id){
        $Work = Works::find($id);
        return view('Dashboard.Work.View')->with(['Work' => $Work]);
    }

    public function Done($id){

    }

}
