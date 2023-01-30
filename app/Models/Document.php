<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use Uuids;
    use HasFactory;
    public $fillable = [
        'type',
        'photo',
        'student_id'
    ];
    public function getCreatedAtAttribute($values)
    {
        return date('d-M-y h:i:s a', strtotime($values));
    }
    // public function setTypeAttribute($values)
    // {
    //     $this->attributes['type'] = ucwords($values);
    // }
    public function getUpdatedAtAttribute($values)
    {
        return date('d-M-y h:i:s a', strtotime($values));
    }
    public function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtolower($value),
            set: fn ($value) => ucwords($value)
        );
    }
}
