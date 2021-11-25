<?php

namespace App\Http\Controllers\Admin;
// use admin datatable
use App\DataTables\CourseDatatable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
//========================================= index =========================================
    public function index(CourseDatatable $course)
    {
        return $course->render('admin.courses.index', ['title' => 'الكورسات']);
    }

//========================================= create =========================================
    public function create()
    {
        return view('admin.courses.create', ['title' => 'اضافة كورس جديد']);
    }

//========================================= store =========================================
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(),
            [
                'level_id' => 'required|exists:levels,id',
                'title' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|image',
                'contents' => 'nullable',
            ], [], []
        );
        if ($validator->fails()) {
            $errors = collect($validator->errors())->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning($error, trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }
        $data = $validator->validated();
        if (request()->image != '') {
            $data['image'] = upload_image('courses', request()->image, 1, 'image');
        }
        $data["slug"] = make_slug($request->title);
        Course::create($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('course') . '?type=close');
    }

//========================================= show =========================================
    public function show($id)
    {
        //
    }

//========================================= edit =========================================
    public function edit($id)
    {
        $course = Course::find($id);
        $title = 'تعديل كورس';
        return view('admin.courses.edit', compact('course', 'title'));
    }

//========================================= update =========================================
    public function update(Request $r, $id)
    {
        $validator = Validator::make(request()->all(),
            [
                'level_id' => 'required|exists:levels,id',
                'title' => 'required',
                'price' => 'required|numeric',
                'image' => 'nullable|image',
                'contents' => 'nullable',
            ], [], []
        );
        if ($validator->fails()) {
            $errors = collect($validator->errors())->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning($error, trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }
        $data = $validator->validated();
        if (request()->image != '') {
            $data['image'] = upload_image('courses', request()->image, 1, 'image');
        }
        $data["slug"] = make_slug($r->title);
        Course::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('course') . '?type=close');
    }

//========================================= destroy =========================================
    public function destroy($id)
    {
        $course = Course::find($id);
        delete_image($course->icon);
        $course->delete();
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'course' . '?type=close';
        return redirect(aurl($path_));
    }

//========================================= multi_delete =========================================
    public function multi_delete()
    {
        // return request()->all();
        if (is_array(request('item'))) {
            foreach (request('item') as $item) {
                $course = Course::find($item);
                delete_image($course->icon);
            }
            Course::destroy(request('item'));
        } else {
            $course = Course::find(request('item'));
            delete_image($course->icon);
            $course->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'course';
        return redirect(aurl($path_) . '?type=close');
    }
}
