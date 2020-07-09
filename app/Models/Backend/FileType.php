<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    protected $table = 'file_type';

    //protected $fillable = ['name', 'details', 'cv', 'students_id'];
    protected $guarded = [];

    //protected $hidden[];

    public function file_upload(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasOne(FileUpload::class);
    }
}
