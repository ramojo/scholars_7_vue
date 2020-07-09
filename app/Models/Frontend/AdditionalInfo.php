<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    protected $table = 'additional_info';
    protected $guarded = [];

    public function main_student_info()
    {
        return $this->belongsTo(MainStudentInfo::class);
    }
}
