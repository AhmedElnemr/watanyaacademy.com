<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Academy_New;
use App\Models\Contact;
use App\Models\Course;
use App\Models\OpenCourse;
use App\Models\Register;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ActionController extends Controller {

    public function send_contact()
    {
//        return request()->all();

        $validator = Validator::make(request()->all(),
            [
                'name'     => 'required',
                'email'    => 'required',
                'message'  => 'nullable',
            ], [], []
        );

        if ($validator->fails())
        {
            $errors = collect($validator->errors())->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning($error, trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }

        $data = $validator->validated();

//        return $data;

        Contact::create($data);
        toastr()->success('شكرا للتواصل معانا');
        return back();
    }

    public function register()
    {
//        return request()->all();

        $validator = Validator::make(request()->all(),
            [
                'student_name'   => 'required',
                'qualification'  => 'required',
                'age'            => 'required',
                'address'        => 'required',
                'phone'          => 'required',
                'email'          => 'required',
                'course_id'      => 'nullable|exists:open_courses,id',
                'activity_id'    => 'nullable|exists:activities,id',
                'image'    => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1000000000000',
            ], [], []
        );
        if ($validator->fails())
        {
            $errors = collect($validator->errors())->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning($error, trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }
        $data = $validator->validated();

        if (request()->image != '') {
            $data['image']  = upload_image('register',request()->image, 1, 'image');
        }

        Register::create($data);
        toastr()->success('تم التسجيل فى الاكاديميه');
        return back();
    }



} //end of class


