<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\ActivityDepartmentDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ActivityDepartment;

use Illuminate\Support\Facades\Validator;


class ActivityDepartmentController extends Controller {


//========================================= index =========================================

    public function index(ActivityDepartmentDatatable $activity_department) {
        return $activity_department->render('admin.activity_departments.index');
    }



//========================================= create =========================================
    public function create() {
        return view('admin.activity_departments.create');
    }


//========================================= store =========================================
    public function store(Request $request) {



        $validator = Validator::make(request()->all(),
            [
                'title'       => 'required',
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

//        return $data;

        ActivityDepartment::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('activity_department'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $activity_department = ActivityDepartment::find($id);
        return view('admin.activity_departments.edit', compact('activity_department'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {

        $validator = Validator::make(request()->all(),
            [
                'title'       => 'required',
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

        ActivityDepartment::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('activity_department'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $activity_department = ActivityDepartment::find( $id );
        delete_image($activity_department->icon);
        $activity_department->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'activity_department';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $activity_department = ActivityDepartment::find( $item );
                delete_image($activity_department->icon);
            }


            ActivityDepartment::destroy(request('item'));
        } else {
            $activity_department = ActivityDepartment::find( request('item') );
            delete_image($activity_department->icon);
            $activity_department->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'activity_department';
        return redirect(aurl($path_));

    }


}
