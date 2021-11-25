<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\BannerDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;

use Illuminate\Support\Facades\Validator;


class BannerController extends Controller {


//========================================= index =========================================

    public function index(BannerDatatable $banner) {
        return $banner->render('admin.banners.index', ['title' => 'البنرات ( banners )']);
    }



//========================================= create =========================================
    public function create() {
        return view('admin.banners.create', ['title' => 'اضافة بنر ( banner ) جديد' ]);
    }


//========================================= store =========================================
    public function store(Request $request) {



        $validator = Validator::make(request()->all(),
            [
                'key_word'    => 'required',
                'title'       => 'required',
                'background'  => 'required|image',
                'url_name'    => 'nullable',
                'video'       => 'nullable',
                'contents'    => 'nullable',

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

        if (request()->background != '') {
            $data['background']  = upload_image('banners',request()->background, 1, 'background');
        }

        if (request()->video != '') {
            $data['video']  = upload_image('banners',request()->video, 1, 'video');
        }

//        return $data;

        Banner::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('banner'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $banner = Banner::find($id);
        $title = 'تعديل banner';
        return view('admin.banners.edit', compact('banner', 'title'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {



        $validator = Validator::make(request()->all(),
            [
                'title'       => 'required',
                'key_word'    => 'required',
                'url_name'    => 'nullable',
                'background'  => 'nullable|image',
                'video'       => 'nullable',
                'contents'    => 'nullable',
                'color_title'    => 'nullable',
                'color_contents'    => 'nullable',

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

        if (request()->background != '') {
            $data['background']  = upload_image('banners',request()->background, 1, 'background');
        }


        if (request()->video != '') {
            $data['video']  = upload_image('banners',request()->video, 1, 'video');
        }

        Banner::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('banner'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $banner = Banner::find( $id );
        delete_image($banner->icon);
        $banner->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'banner';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $banner = Banner::find( $item );
                delete_image($banner->icon);
            }


            Banner::destroy(request('item'));
        } else {
            $banner = Banner::find( request('item') );
            delete_image($banner->icon);
            $banner->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'banner';
        return redirect(aurl($path_));

    }


}
