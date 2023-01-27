<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'email',
        'password',
        'contact',
        'semester',
        'hobby',
        'gender',
        'color',
        'intrest',
        'dob',
        'url',
        'photo'
    ];
}
