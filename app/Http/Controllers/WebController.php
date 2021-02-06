<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function Install(){
        dd(env('Installed'));
        if (env('Installed') == false){
           putenv('Installed=true');
        }else{
            dd(env('Installed'));
        }
    }
}
