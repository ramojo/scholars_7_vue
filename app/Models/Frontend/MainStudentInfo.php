<?php

namespace App\Models\Frontend;

use App\Models\Backend\Programme;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

/**
 * @method static whereIn(string $string, array $prog_id)
 */
class MainStudentInfo extends Model
{
    protected $table = 'main_student_info';
    protected $guarded = [];
    protected $with = ['programme'];
   /* protected $fillable = [
        'first_name',
                'middle_name',
                'last_name',
                'staff_number',
                'cbid_students_number',
                'country_id',
                'gender',
                'passport_photo',
                'date_of_birth',
                'national_id_number',
                'icipe_email',
                'personal_email',
                'alt_personal_email',
                'icipe_phone',
                'mobile_number',
                'alt_number',
                'skype_address',
                'social_media_links',
                'mailing_address',
                'kin_name',
                'kin_relationship',
                'kin_number',
                'kin_email',
                'kin_address',
                'basestation->basestations',
                //'programme->programmes',
                'programme_id',
    ];*/

public function passport_info()
{
    return $this->hasOne(PassportInfo::class);
}

public function professional_info()
{
    return $this->hasOne(ProfessionalInfo::class);
}

public function student_info()
{
    return $this->hasOne(StudentInfo::class);
}

public function contract_term_info()
{
    return $this->hasOne(ContractTermInfo::class);
}

public function work_at_icipe_info()
{
    return $this->hasOne(WorkAtIcipeInfo::class);
}

public function graduation_thesis_info()
{
    return $this->hasOne(GraduationThesisInfo::class);
}

public function alumni_info()
{
    return $this->hasOne(AlumniInfo::class);
}

public function insurance_info()
{
    return $this->hasOne(InsuranceInfo::class);
}

public function file_uploads()
{
    return $this->hasMany(FileUpload::class);
}

public function additional_info()
{
    return $this->hasOne(AdditionalInfo::class);
}

public function actual_file_info()
{
    return $this->hasOne(ActualFileInfo::class);
}


public function programme(){
//    return $this->belongsTo(Programme');
    return $this->belongsTo(Programme::class);
        //return $this->belongsTo(Programme::Class);
}

public function theme(){
    return $this->belongsTo(Theme::class);
        //return $this->belongsTo(Programme::Class);
}
    /*public function schol_provider(){
        return $this->belongsTo('App\Models\Frontend\ScholProvider');
    }
    public function donor_hosting_proj(){
        return $this->belongsTo('App\Models\Frontend\DonorHostingProj');
    }*/

    public function country(){
        return $this->belongsTo(Country::class);
    }


    // public function setDateOfBirthAttribute($value)
    //     {
    //         $this->attributes['date_of_birth'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
    //     }



}
