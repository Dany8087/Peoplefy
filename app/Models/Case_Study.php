<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case_Study extends Model
{
    protected $fillable = [
        'Title',
        'Created_by',
        'Details',
        'Images_Author_Photo'
    ];
    use HasFactory;
}
