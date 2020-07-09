<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class RegUni extends Model
{
    protected $table = 'reg_uni';

    protected $fillable = ['reg_unis', 'country', 'website'];

    //protected $hidden[];

    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(StudentInfo::class);
    }
}
