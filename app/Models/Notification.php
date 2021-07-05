<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'UserID',
        'WorkID',
        'Description',
        'Status',
    ];
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class , 'id' , 'UserID');
    }
}
