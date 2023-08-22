<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    use HasFactory;
    protected $fillable = ['school_id', 'school_class_id', 'subject_id', 'teachers'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function school_class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
