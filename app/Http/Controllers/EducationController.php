<?php

namespace App\Http\Controllers;

use App\Models\CourseSchedule;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $course_schedules = CourseSchedule::all();
        return view('education.index', compact('course_schedules'));
    }
}
