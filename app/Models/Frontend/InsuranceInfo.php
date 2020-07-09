<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class InsuranceInfo extends Model
{
    protected $table = 'insurance_info';
    protected $guarded = [];


public function main_student_info()
{
    //return $this->belongsTo('App\Models\Frontend\MainStudentInfo');
    return $this->belongsTo(MainStudentInfo::class);
}

    public function setInsuranceExpiryDateAttribute($value)
        {
            $this->attributes['insurance_expiry_date'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
        }
}
