<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Student extends Model
{
    use Uuids;
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

    // function getEmailAttribute($value){
        
    //     // return Str::mask($value, '*', 5,-10);
    //     return Str::of($value)->mask('*',5,-10);
    // }
    // function password(): Attribute
    // {
    //     return Attribute::make(
    //     get: fn($value) => Str::mask($value, '*', 3),
    //     );
    // }
    
    function getCreatedAtAttribute($value){
        return date('d-M-y l h:i:s a',strtotime($value));
    }
}
