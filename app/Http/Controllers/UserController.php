<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        if (\Auth::user()->Permission == 'Admin') {
            return view('Dashboard.index');

        }elseif (Auth::user()->Permission == 'Employee'){
            return view('Dashboard.Employee.index');

        }
    }


    public function All(){
        $Users = User::where('Permission' ,'!=' , 'Admin')->get();
        return view('Dashboard.User.All')->with(['Users' => $Users]);
    }
    public function Add(){
        return view('Dashboard.User.Add');
    }
    public function Create(Request $request){
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'PhoneNumber' => 'required|numeric|unique:users',
            'email' => 'required|string|unique:users',
            'password' => 'required|string',
            'Role' => 'required|integer',
            'Grade' => 'required|string',
        ]);

        User::create([
            'Firstname' => $request->FirstName,
            'Lastname' => $request->LastName,
            'PhoneNumber' => $request->PhoneNumber,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'Role' => $request->Role,
            'Grade' => $request->Grade,
        ]);
        Alert::toast('کاربر با موفقیت افزوده شد' , 'success');
        return redirect()->route('Dashboard.Users.All');
    }
    public function Edit($id ){
        $User = User::find($id);

        return view('Dashboard.User.Edit')->with(['User' => $User]);
    }
    public function Update($id , Request $request){
        $User = User::find($id);
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'PhoneNumber' => 'required|numeric',
            'password' => 'nullable|string',
            'Role' => 'required|integer',
            'Grade' => 'required|string',
        ]);
        $User->update([
            'Firstname' => $request->FirstName,
            'Lastname' => $request->LastName,
            'Role' => $request->Role,
            'Grade' => $request->Grade,
        ]);
        if ($request->has('password')) {
            $User->password = \Hash::make($request->password);
        }
        if ($request->PhoneNumber != $User->PhoneNumber) {

            $User->PhoneNumber = $request->PhoneNumber;

        }
        $User->save();
        Alert::toast('کاربر با موفقیت بروزرسانی شد' , 'success');

        return redirect()->route('Dashboard.Users.All');
    }
    public function Delete($id){
        $User = User::find($id);
        $User->delete();
        Alert::toast('کاربر با موفقیت حذف شد' , 'success');
        return redirect()->back();

    }
}
