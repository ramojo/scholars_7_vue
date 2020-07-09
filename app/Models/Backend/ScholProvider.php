<?php



namespace App\Models\Backend;



use Illuminate\Database\Eloquent\Model;



class ScholProvider extends Model

{

     protected $table = 'schol_provider';

    protected $guarded = [];





public function student_info()

{

    return $this->belongsTo(StudentInfo::class);

}

}
