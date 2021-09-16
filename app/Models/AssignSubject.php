<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    use HasFactory;
    protected $fillable = [
        'classId',
        'subjectId',
        'fullMark',
        'passMark',
        'subjectiveMark',
    ];

    public function  studentClass(){

        return $this->belongsTo(StudentClass::class,"classId","id");

    }
    public function  schoolSubject(){

        return $this->belongsTo(SchoolSubject::class,"subjectId","id");

    }
}
