<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_uploads';

    //protected $fillable = ['name', 'details', 'cv', 'students_id'];
    protected $guarded = [];

    //protected $hidden[];

    public function main_student_info(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->belongsTo(MainStudentInfo::class);
    }
    public function file_type(){
    	//return $this->hasMany('App\Arppis_Student','App\Drip_Masters_Student','Drip_Phd_Student');
    	return $this->hasOne(FileType::class);
    }
}
