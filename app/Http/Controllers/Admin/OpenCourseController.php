<?php
namespace App\Http\Controllers\Admin;
// use admin datatable
use App\DataTables\OpenCourseDatatable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OpenCourse;
use Illuminate\Support\Facades\Validator;
class OpenCourseController extends Controller
{
//========================================= index =========================================
    public function index(OpenCourseDatatable $open_course)
    {
        return $open_course->render('admin.open_courses.index', ['title' => 'الكورسات المفتوحة']);
    }
//========================================= create =========================================
    public function create()
    {
        return view('admin.open_courses.create', ['title' => 'اضافة كورس مفتوح جديد']);
    }
//========================================= store =========================================
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(),
            [
                'title' => 'required',
                'image' => 'required|image',
                'duration' => 'required',
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
        OpenCourse::create($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('open_course') . '?type=open');
    }
//========================================= show =========================================
    public function show($id)
    {
        //
    }
//========================================= edit =========================================
    public function edit($id)
    {
        $open_course = OpenCourse::find($id);
        $title = 'تعديل كورس مفتوح';
        return view('admin.open_courses.edit', compact('open_course', 'title'));
    }
//========================================= update =========================================
    public function update(Request $r, $id)
    {
        $validator = Validator::make(request()->all(),
            [
                'title' => 'required',
                'image' => 'nullable|image',
                'duration' => 'required',
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
        OpenCourse::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('open_course') . '?type=open');
    }
//========================================= destroy =========================================
    public function destroy($id)
    {
        $open_course = OpenCourse::find($id);
        delete_image($open_course->icon);
        $open_course->delete();
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'open_course' . '?type=open';
        return redirect(aurl($path_));
    }
//========================================= multi_delete =========================================
    public function multi_delete()
    {
        // return request()->all();
        if (is_array(request('item'))) {
            foreach (request('item') as $item) {
                $open_course = OpenCourse::find($item);
                delete_image($open_course->icon);
            }
            OpenCourse::destroy(request('item'));
        } else {
            $open_course = OpenCourse::find(request('item'));
            delete_image($open_course->icon);
            $open_course->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'open_course' . '?type=open';
        return redirect(aurl($path_));
    }
}
