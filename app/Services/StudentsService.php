<?php

namespace App\Services;

use App\Models\Frontend\MainStudentInfo;
use Carbon\Carbon;

class StudentsService
{
    public function getStudentsWithProgrammes(array $prog_ids){

        return MainStudentInfo::whereIn('programme_id', $prog_ids)
            ->join('student_info', 'main_student_info.id', '=', 'student_info.main_student_info_id')
//            ->join('programme', 'main_student_info.id', '=', 'student_info.main_student_info_id')
            ->where('finish_date', '>', Carbon::now())
            ->get()
            ->groupBy('programme.programmes');
        /*$programmes = MainStudentInfo::whereIn('programme_id', $prog_ids)
            ->join('student_info', 'main_student_info.id', '=', 'student_info.main_student_info_id')
//            ->join('programme', 'main_student_info.id', '=', 'student_info.main_student_info_id')
            ->where('finish_date', '>', Carbon::now())
            ->get()
            ->groupBy('programme.programmes');
        return $programmes;*/
    }


}
