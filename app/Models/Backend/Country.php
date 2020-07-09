<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    //protected $fillable = ['code', 'name_en', 'name_fr'];
    protected $guarded = [];
    //protected $hidden[];

    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasMany(MainStudentInfo::class);
    }
}
