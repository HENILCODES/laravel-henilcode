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
    function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    function getUpdatedAtAttribute($value){
        return date('d-M-y l h:i:s a',strtotime($value));
    }
    function getCreatedAtAttribute($value){
        return date('d-M-y l h:i:s a',strtotime($value));
    }
}
