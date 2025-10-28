<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory,HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'gender',
        'email',
        'password',
        'university',
        'field_study',
        'qualification',
        'experience',
    ];
}
