<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Parts;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function Done($id){
        $Part = Parts::find($id);
        $WorkID = $Part->WorkID;
        $Part->Status = 'Finished';
        $Part->save();
        Notification::create([
            'UserID' => \Auth::id(),
            'WorkID' => $WorkID,
            'Description' => 'کار شما به اتمام رسید',
            'Status' => 'New',
        ]);
        return redirect()->back();
    }
}
