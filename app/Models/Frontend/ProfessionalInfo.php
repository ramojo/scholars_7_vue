<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class ProfessionalInfo extends Model
{
    protected $table = 'professional_info';
    protected $guarded = [];


public function main_student_info()
{
    return $this->belongsTo(MainStudentInfo::class);
}


}
