<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Academy_New;
use App\Models\Activity;
use App\Models\ActivityDepartment;
use App\Models\Course;
use App\Models\Level;
use App\Models\OpenCourse;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{


    /* open courses */
    public function courses()
    {
        $courses = OpenCourse::where('id', '!=', 0)->orderBy('id', 'desc')->get();
        return view('website.pages.open_courses.courses', compact('courses'));
    }

    public function course_details($id)
    {
        $course_details = OpenCourse::findorfail($id);
        return view('website.pages.open_courses.course_details', compact('course_details'));
    }
    /* open courses */

    /* courses */
    public function courses_by_level($id)
    {
        $level = Level::findorfail($id);
        $courses = Course::where('level_id', $id)->get();
        return view('website.pages.courses.courses_by_level', compact('level', 'courses'));
    }
    /* courses */


    /* activity */
    public function activities_by_activity_department($id)
    {
        $ActivityDepartment = ActivityDepartment::withCount('activity_departments_fk')->findorfail($id);
        $Activities = Activity::where('activity_department_id', $id)->get();
        return view('website.pages.activities.activities_by_activity_department', compact('ActivityDepartment', 'Activities'));
    }

    public function activity_detail($id)
    {
        $activity = Activity::with(['images_fk'])->findorfail($id);
        return view('website.pages.activities.activity_detail', compact('activity'));
    }

    /* activity */


    public function team_work()
    {
        $our_teams = Team::where('id', '!=', 0)->orderBy('id', 'desc')->get();
        return view('website.pages.team_work', compact('our_teams'));
    }

    public function how_to_study()
    {
        return view('website.pages.how_to_study');
    }

    public function how_to_subscribe()
    {
        return view('website.pages.how_to_subscribe');
    }

    public function news()
    {
        $news = Academy_New::where('id', '!=', 0)->orderBy('id', 'desc')->get();
        return view('website.pages.news', compact('news'));
    }

    public function contact_us()
    {
        return view('website.pages.contact_us');
    }

    public function register()
    {
        return view('website.pages.register');
    }

    public function site_text()
    {
        $validator = Validator::make(request()->all(),
            [
                'key_word' => 'required|exists:site_texts,key_word',
            ], [], []
        );
        if ($validator->fails()) {
            $errors = collect($validator->errors())->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning($error, trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }
        return view('website.pages.site_texts');
    }

    public function wordOfPrestent()
    {
        $title = "كلمة رئيس الاكاديمية" ;

        return view('website.pages.word_of_prestent',compact('title'));
    }

    public function teamMember($id)
    {
        $our_team = Team::findorfail($id);
        return view('website.pages.db_profile', compact('our_team'));
    }

} //end of class


