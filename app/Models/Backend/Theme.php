<?php

namespace App\Models\Backend;

use App\Models\Frontend\MainStudentInfo;
use Illuminate\Database\Eloquent\Model;

class   Theme extends Model
{
    protected $table = 'theme';

    //protected $fillable = ['themes'];
    protected $guarded = [];
    //protected $hidden[];

    /* public function student_info(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany('App\Models\Frontend\StudentInfo');
    } */
    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(MainStudentInfo::class);
    }
}
