<?php

namespace App\Http\Controllers;

use App\Models\CourseSchedule;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $course_schedules = CourseSchedule::all();
        $galleries = Gallery::all();
        $news = News::all();
        return view('welcome', compact('teams', 'course_schedules', 'galleries', 'news'));
    }
}
