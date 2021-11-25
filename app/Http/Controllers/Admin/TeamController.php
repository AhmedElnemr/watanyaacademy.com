<?php

namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\TeamDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team;

use Illuminate\Support\Facades\Validator;


class TeamController extends Controller
{


//========================================= index =========================================

    public function index(TeamDatatable $team)
    {
        return $team->render('admin.teams.index', ['title' => 'الاعضاء']);
    }


//========================================= create =========================================
    public function create()
    {
        return view('admin.teams.create', ['title' => 'اضافة عضو جديد']);
    }


//========================================= store =========================================
    public function store(Request $request)
    {


        $validator = Validator::make(request()->all(),
            [
                'name' => 'required',
                'position' => 'required',
                'face_book' => 'nullable',
                'twitter' => 'nullable',
                'instagram' => 'nullable',
                'contents' => 'required',
                'cv' => 'nullable|mimes:pdf|max:100000',
                'image' => 'nullable|image',

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

        if (request()->cv != '') {
            $data['cv'] = upload_image('teams', request()->cv, 1, 'cv');
        }
        if (request()->cv != '') {
            $data['image'] = upload_image('teams', request()->image, 1, 'image');
        }


        Team::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('team'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }


//========================================= edit =========================================
    public function edit($id)
    {

        $team = Team::find($id);
        $title = 'تعديل team';
        return view('admin.teams.edit', compact('team', 'title'));

    }

//========================================= update =========================================
    public function update(Request $r, $id)
    {

        $validator = Validator::make(request()->all(),
            [
                'name' => 'required',
                'position' => 'required',
                'face_book' => 'nullable',
                'twitter' => 'nullable',
                'instagram' => 'nullable',
                'contents' => 'required',
                'cv' => 'nullable|mimes:pdf|max:100000',
                'image' => 'nullable|image',

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

        if (request()->cv != '') {
            $data['cv'] = upload_image('teams', request()->cv, 1, 'cv');
        }
        if (request()->image != '') {
            $data['image'] = upload_image('teams', request()->image, 1, 'image');
        }


        Team::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('team'));

    }


//========================================= destroy =========================================
    public function destroy($id)
    {

        $team = Team::find($id);
        delete_image($team->icon);
        $team->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'team';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete()
    {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item) {
                $team = Team::find($item);
                delete_image($team->icon);
            }


            Team::destroy(request('item'));
        } else {
            $team = Team::find(request('item'));
            delete_image($team->icon);
            $team->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'team';
        return redirect(aurl($path_));

    }


}
