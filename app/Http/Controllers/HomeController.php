<?php

namespace App\Http\Controllers;

use App\Models\Backend\Programme;
use App\Services\StudentsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(StudentsService $service)
    {
//        $prog_ids = Programme::all();
//        $prog_ids->pluck('id')->toArray();
        $prog_ids = [1,2,3,4,5,6,7,8,9,10,11];
        $programmes = $service->getStudentsWithProgrammes($prog_ids);
        return view('home', compact('programmes'));
    }
}
