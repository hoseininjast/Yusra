<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RolesController extends Controller
{
    public function All(){
        $Roles = Roles::all();
        return view('Dashboard.Role.All')->with(['Roles' => $Roles]);
    }
    public function Add(){
        return view('Dashboard.Role.Add');
    }
    public function Create(Request $request){
        $request->validate([
            'Name' => 'required|string'
        ]);
        try {
            Roles::create([
                'Name' => $request->Name
            ]);
            Alert::toast('نقش با موفقیت ساخته شد' , 'success');
            return redirect()->route('Dashboard.Role.All');
        }catch (\Exception $exception){
            Alert::toast($exception->getMessage() , 'success');
        return redirect()->back();

        }
    }
    public function Edit($id){
        $Role = Roles::find($id);
        return view('Dashboard.Role.Edit')->with(['Role' => $Role]);
    }
    public function Update($id , Request $request){
        try {
            $Role = Roles::find($id);
            $request->validate([
                'Name' => 'required|string'
            ]);
            $Role->update([
                'Name' => $request->Name
            ]);
            Alert::toast('نقش با موفقیت بروزرسانی شد' , 'success');
            return redirect()->route('Dashboard.Role.All');
        }catch (\Exception $exception){
            Alert::toast($exception->getMessage() , 'success');
        return redirect()->back();

        }
    }
    public function Delete($id){
        $Role = Roles::find($id);
        $Role->delete();
        Alert::toast('نقش مورد نظر شما با موفقیت حذف شد' , 'success');
        return redirect()->back();
    }
}
