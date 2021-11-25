<?php

namespace App\Http\Controllers\Admin;
// use admin datatable
use App\DataTables\NewDatatable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Academy_New;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NewController extends Controller
{
    //========================================= index =========================================

    public function index(NewDatatable $new)
    {
        return $new->render('admin.news.index', ['title' => 'الاخبار']);
    }

    //========================================= create =========================================

    public function create()
    {
        return view('admin.news.create', ['title' => 'اضافة خبر جديد']);
    }

    //========================================= store =========================================

    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(),
            [
                'title' => 'required',
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
        Academy_New::create($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('new'));
    }

    //========================================= show =========================================

    public function show($id)
    {
        //
    }

    //========================================= edit =========================================

    public function edit($id)
    {
        $new = Academy_New::find($id);
        $title = 'تعديل خبر';
        return view('admin.news.edit', compact('new', 'title'));
    }

    //========================================= update =========================================

    public function update(Request $r, $id)
    {
        $validator = Validator::make(request()->all(),
            [
                'title' => 'required',
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
        Academy_New::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('new'));
    }

    //========================================= destroy =========================================

    public function destroy($id)
    {
        $new = Academy_New::find($id);
        delete_image($new->icon);
        $new->delete();
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'new';
        return redirect(aurl($path_));
    }

    //========================================= multi_delete =========================================

    public function multi_delete()
    {
        // return request()->all();
        if (is_array(request('item'))) {
            foreach (request('item') as $item) {
                $new = Academy_New::find($item);
                delete_image($new->icon);
            }
            Academy_New::destroy(request('item'));
        } else {
            $new = Academy_New::find(request('item'));
            delete_image($new->icon);
            $new->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'new';
        return redirect(aurl($path_));
    }
}
