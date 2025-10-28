<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
        'gender',
        'field_study',
        'email',
        'password',
        'inter',
    ];

}
