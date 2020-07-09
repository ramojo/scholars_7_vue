<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class StudentInfo extends Model
{
    protected $table = 'student_info';
    protected $guarded = [];

    public function main_student_info()
    {
        return $this->belongsTo(MainStudentInfo::class);
    }

    public function reg_uni(){
        return $this->belongsTo(RegUni::class);
    }
    public function basestation(){
        return $this->belongsTo(Basestation::class);
    }
    public function uni_sup(){
        return $this->belongsTo(UniSup::class);
        //return $this->belongsTo(UniSup::class);
    }
    public function icipe_sup(){
        return $this->belongsTo(IcipeSup::class);
        //return $this->belongsTo(IcipeSup::class);
    }
    public function theme(){
        return $this->belongsTo(Theme::class);
        //return $this->belongsTo(Theme::class);
    }
    public function schol_provider(){
        return $this->belongsTo(ScholProvider::class);
        //return $this->belongsTo(ScholProvider::class);
    }

    public function setUniRegDateAttribute($value)
        {
            $this->attributes['uni_reg_date'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
        }
    public function setUniFeesDueAttribute($value)
        {
            $this->attributes['uni_fees_due'] = !empty($value) ? Carbon::createFromFormat('Y-m-d',$value) : null;
        }

}
