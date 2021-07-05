<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $fillable = [
        'Name',
        'Status',
        'StartDate',
        'EndDate',
        'WorkDays',
    ];
    use HasFactory;

    public static function Parts(Works $works){


        return  \App\Models\Roles::count() .'/'. \App\Models\Parts::where([['WorkID' , $works->id],['Status' , 'Finished']])->count();
    }
    public  function Part(){
        return $this->hasMany(Parts::class , 'WorkID' , 'id');
    }
}
