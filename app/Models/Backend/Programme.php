<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = 'programme';

    protected $fillable = ['programmes'];

    //protected $hidden[];

    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(MainStudentInfo::class);
    }
}
