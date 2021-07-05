<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function Setting()
    {
        return view('Dashboard.Auth.Setting');
    }

    public function SettingUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'New_password' => 'required|confirmed'
         ]);
        \Auth::user()->password = \Hash::make($request->New_password);
        \Auth::user()->save();
        \Auth::logout();
        Alert::toast('تنظیمات شما ذخیره شد', 'success');
        return redirect()->back();
    }

    public function ImageUpdate(Request $request){
        $request->validate([
            'Image' => 'required|max:2048'
        ]);
        $image = $request->file('Image');

        $name = time().'.'.$image->getClientOriginalName();
        $fullpath = "/images/" . \Auth::user()->PhoneNumber.'/' ;

        $image->move($fullpath , $name);

        \Auth::user()->profile_photo_path = $fullpath . $name;
        \Auth::user()->save();
        return redirect()->back();
    }
}
