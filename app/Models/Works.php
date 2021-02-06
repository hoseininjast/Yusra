<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $fillable = [
        'Name',
        'Status',
    ];
    use HasFactory;

    public static function Parts(Works $works){


        return  \App\Models\Roles::count() .'/'. \App\Models\Parts::where([['WorkID' , $works->id],['Status' , 'Finished']])->count();
    }
}
