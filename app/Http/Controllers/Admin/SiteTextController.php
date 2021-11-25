<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\SiteTextDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SiteText;

use Illuminate\Support\Facades\Validator;


class SiteTextController extends Controller {


//========================================= index =========================================

    public function index(SiteTextDatatable $site_text) {
        return $site_text->render('admin.site_texts.index');
    }



//========================================= create =========================================
    public function create() {
        return view('admin.site_texts.create');
    }


//========================================= store =========================================
    public function store(Request $request) {



        $validator = Validator::make(request()->all(),
            [
                'key_word'    => 'required',
                'title'       => 'required',
                'contents'    => 'nullable',
                'logo'        => 'nullable|image',
                'video'       => 'nullable',
                'color'       => 'nullable',
                'color_title'       => 'nullable',
                'color_contents'       => 'nullable',
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

        if (request()->logo != '') {
            $data['logo']  = upload_image('site_texts',request()->logo, 1, 'logo');
        }

        if (request()->video != '') {
            $data['video']  = upload_image('site_texts',request()->video, 1, 'video');
        }

//        return $data;

        SiteText::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('site_text'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $site_text = SiteText::find($id);
        return view('admin.site_texts.edit', compact('site_text'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {



        $validator = Validator::make(request()->all(),
            [
                'key_word'    => 'required',
                'title'       => 'required',
                'contents'    => 'nullable',
                'logo'        => 'nullable|image',
                'video'       => 'nullable',
                'color'       => 'nullable',
                'color_title'       => 'nullable',
                'color_contents'       => 'nullable',
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

        if (request()->logo != '') {
            $data['logo']  = upload_image('site_texts',request()->logo, 1, 'logo');
        }

        if (request()->video != '') {
            $data['video']  = upload_image('site_texts',request()->video, 1, 'video');
        }

        SiteText::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('site_text'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $site_text = SiteText::find( $id );
        delete_image($site_text->icon);
        $site_text->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'site_text';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $site_text = SiteText::find( $item );
                delete_image($site_text->icon);
            }


            SiteText::destroy(request('item'));
        } else {
            $site_text = SiteText::find( request('item') );
            delete_image($site_text->icon);
            $site_text->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'site_text';
        return redirect(aurl($path_));

    }


}
