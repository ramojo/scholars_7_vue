<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Basestation extends Model
{
    protected $table = 'basestation';

    protected $fillable = ['basestations'];

    //protected $hidden[];

    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(StudentInfo::class);
    }
}
