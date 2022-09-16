<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function create()
    {
        $courseTypes = CourseType::all();
        return view('courses.create', 
            ['courseTypes' => $courseTypes]
        );
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->guest_id = Auth::id();
        $course->course_type_id = $request->input('coursetypeid');
        $course->datetime = $request->input('datetime');
        $course->save();
        return view('dashboard');
    }
}
