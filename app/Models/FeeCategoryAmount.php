<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCategoryAmount extends Model
{
    use HasFactory;
    protected $fillable = [
        'feeCategoryId',
        'classId',
        'amount',
    ];

    public function feeCategory(){

        return $this->belongsTo(FeeCategory::class,"feeCategoryId","id");

    }

    public function  feeCategoryClass(){

        return $this->belongsTo(StudentClass::class,"classId","id");

    }


}
