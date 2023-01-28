<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
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
    public function setTypeAttribute($values){
        $this->attributes['type'] = ucwords($values);
    }
    public function getUpdatedAtAttribute($values)
    {
        return date('d-M-y h:i:s a', strtotime($values));
    }
}
