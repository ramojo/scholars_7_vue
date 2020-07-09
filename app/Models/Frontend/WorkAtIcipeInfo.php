<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class WorkAtIcipeInfo extends Model
{
    protected $table = 'work_at_icipe_info';
    protected $guarded = [];

    public function main_student_info()
    {
        return $this->belongsTo(MainStudentInfo::class);
    }
}
