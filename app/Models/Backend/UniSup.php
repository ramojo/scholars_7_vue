<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class UniSup extends Model
{
    protected $table = 'uni_sup';

    //protected $fillable = ['uni_sups', 'uni_sups_email', 'uni_sups_address'];
    protected $fillable = ['uni_sups'];
    //protected $hidden[];

    public function student_info(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(StudentInfo::class);
    }
}
