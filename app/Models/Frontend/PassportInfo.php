<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PassportInfo extends Model
{

    protected $table = 'passport_info';

    protected $guarded = [];
/*    protected $fillable = [
        'passport_number',
        'passport_expiry',
        'entry_visa',
        'visa_expiry',
        'required_pass',
        'required_pass_expiry',
        'alien_pass_expiry',
        'research_permit_expiry',
        'student_id',
        ];
*/
    public function main_student_info(){
        return $this->belongsTo(MainStudentInfo::class);
        //return $this->belongsTo(MainStudentInfo::class);
    }

    public function setPassportExpiryAttribute($value)
    {
        $this->attributes['passport_expiry'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    }
    public function setVisaExpiryAttribute($value)
    {
        $this->attributes['visa_expiry'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    }
    public function setRequiredPassExpiryAttribute($value)
    {
        $this->attributes['required_pass_expiry'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    }
    public function setAlienPassExpiryAttribute($value)
    {
        $this->attributes['alien_pass_expiry'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    }
    public function setResearchPermitExpiryAttribute($value)
    {
        $this->attributes['research_permit_expiry'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    }
}
