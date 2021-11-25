<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\ActivityDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Activity;
use App\Models\Image;

use Illuminate\Support\Facades\Validator;


class ActivityController extends Controller {


//========================================= index =========================================

    public function index(ActivityDatatable $activity) {
        return $activity->render('admin.activitys.index');
    }



//========================================= create =========================================
    public function create() {
        return view('admin.activitys.create');
    }


//========================================= store =========================================
    public function store(Request $request) {

        $validator = Validator::make(request()->all(),
            [
                'activity_department_id'    => 'required|exists:activity_departments,id',
                'title'                     => 'required',
                'main_image'                => 'required|image',
                'contents'                  => 'nullable',

            ], [], []
        );

        if ($validator->fails()) {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }


        $data =  $validator->validated();

        if (request()->main_image != '') {
            $data['main_image']  = upload_image('activitys',request()->main_image, 1, 'main_image');
        }

//        return $data;

        $activity = Activity::create($data);


        if ( request()->hasFile('images') )
        {
            foreach (request()->images as $image )
            {
                $path_ = 'activitys/'.$activity->id;
                $data = upload_multi_images($image, $activity->id,  $path_);
                $add = Image::create([
                    'type'   => 'activities',
                    'related_id' => $activity->id,
                    'image'   => 'activitys/'.$activity->id.'/'. $data['hashname'],
                ]);
            }
        }


        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('activity'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $activity = Activity::with('images_fk')->find($id);
        return view('admin.activitys.edit', compact('activity'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {




        $validator = Validator::make(request()->all(),
            [
                'activity_department_id'    => 'required|exists:activity_departments,id',
                'title'                     => 'required',
                'main_image'                => 'nullable|image',
                'contents'                  => 'nullable',

            ], [], []
        );

        if ($validator->fails()) {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }


        $data =  $validator->validated();

        if (request()->main_image != '') {
            $data['main_image']  = upload_image('activitys',request()->main_image, 1, 'main_image');
        }


        Activity::where('id', $id)->update($data);


        if ( request()->hasFile('images') )
        {
            foreach (request()->images as $image )
            {
                $path_ = 'activitys/'.$id;
                $data = upload_multi_images($image, $id,  $path_);
                $add = Image::create([
                    'type'   => 'activities',
                    'related_id' => $id,
                    'image'   => 'activitys/'.$id.'/'. $data['hashname'],
                ]);
            }
        }


        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('activity'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $activity = Activity::find( $id );
        delete_image($activity->icon);
        $activity->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'activity';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $activity = Activity::find( $item );
                delete_image($activity->icon);
            }


            Activity::destroy(request('item'));
        } else {
            $activity = Activity::find( request('item') );
            delete_image($activity->icon);
            $activity->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'activity';
        return redirect(aurl($path_));

    }



//========================================= destroy =========================================
    public function delete_img(Request $request) {

        $del = Image::find($request->id);
        delete_image($del->image);
        $del->delete();

        return response([
            'status'=>true,
            'title'   => 'اشعار',
            'id'      => $request->id,
            'message' => 'تم حذف الصورة بنجاح'
        ]);

    }



}
