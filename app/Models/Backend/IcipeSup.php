<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class IcipeSup extends Model
{
    protected $table = 'icipe_sup';

    protected $fillable = ['icipe_sups', 'icipe_sups_email'];

    //protected $hidden = [];

    //protected $nullable = [];

    public function students(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
        // return $this->hasMany(StudentInfo::class);
        return $this->hasMany(StudentInfo::class);
    }

   /* public static $rules = array(
    'icipe_sups' => 'required|min:5',
    'icipe_sups_email' => 'required|email'
  );*/
}
