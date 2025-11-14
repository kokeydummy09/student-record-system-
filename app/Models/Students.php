<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'gender',
        'email',
        'course',
        'year_level',
    ];

    protected $casts = ['date_of_birth' => 'date'];
}
