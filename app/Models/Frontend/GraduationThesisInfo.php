<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class GraduationThesisInfo extends Model
{
    protected $table = 'graduation_thesis_info';
    protected $guarded = [];


public function main_student_info()
{
    //return $this->belongsTo('App\Models\Frontend\MainStudentInfo');
    return $this->belongsTo(MainStudentInfo::class);
}
}
