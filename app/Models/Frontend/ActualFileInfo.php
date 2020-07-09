<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class ActualFileInfo extends Model
{
    protected $table = 'actual_file_info';
    protected $guarded = [];

    public function main_student_info()
    {
        return $this->belongsTo(MainStudentInfo::class);
    }
}

