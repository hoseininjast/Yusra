<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function FindUserByRole(Request $request)
    {
        $Users = User::where('Role' , $request->Role)->get();
        return response()->json([
            'Data' => $Users,
            'Code' => 1
        ],200);
    }
}
