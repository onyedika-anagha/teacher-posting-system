<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedTeacher extends Model
{
    use HasFactory;
    public function class_subject()
    {
        return $this->belongsTo(ClassSubject::class);
    }
}
