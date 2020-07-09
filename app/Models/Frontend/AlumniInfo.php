<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class AlumniInfo extends Model
{
     protected $table = 'alumni_info';
    protected $guarded = [];


public function main_student_info()
{
    return $this->belongsTo(MainStudentInfo::class);
}
}
