<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class ContractTermInfo extends Model
{
     protected $table = 'contract_term_info';
    protected $guarded = [];


public function main_student_info()
{
    return $this->belongsTo(MainStudentInfo::class);
}
}
