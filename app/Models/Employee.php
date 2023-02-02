<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Employee extends Model
{
    use HasFactory,Uuids;
    public $fillable = [
        'name',
        'password',
        'email',
        'contact',
        'type',
        'color',
        'hobby',
        'address',
        'experience',
        'dob',
        'time',
        'url',
        'photo',
        'address'
    ];
}
