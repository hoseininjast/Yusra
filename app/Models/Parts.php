<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $fillable = [
        'Name',
        'WorkID',
        'UserID',
        'RoleID',
        'Description',
        'Status',
        'StartDate',
        'WorkDays',
        'FinishDate',
    ];
    use HasFactory;
}
