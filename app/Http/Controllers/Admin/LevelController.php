<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\LevelDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Level;

use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;

use Image;
class LevelController extends Controller {


//========================================= index =========================================

    public function index(LevelDatatable $level) {
        return $level->render('admin.levels.index', ['title' => 'المستويات']);
    }



//========================================= create =========================================
    public function create() {
        return view('admin.levels.create', ['title' => 'اضافة مستوى جديد' ]);
    }


//========================================= store =========================================
    public function store(Request $request) {



        $validator = Validator::make(request()->all(),
            [
                'title'       => 'required',
                'price'    => 'required|numeric',
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
        if (request()->image != '') {
            $data['image'] = upload_image('levels', request()->image, 1, 'image');
        }
        Level::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('level'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $level = Level::find($id);
        $title = 'تعديل مستوى';
        return view('admin.levels.edit', compact('level', 'title'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {

        $validator = Validator::make(request()->all(),
            [
                'title'       => 'required',
                'price'    => 'required|numeric',
            ], [], []
        );

        if ($validator->fails()) {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }

        /*  $thumbnailpath =  'levels/k6KTd0cLKyfMJ2iccxVeMw7y3uviGLreFyCFYdtS.jpg'; //storage_path($data['image']);
        // return $thumbnailpath;
        $img = Image::make($thumbnailpath)->resize(150, 150, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save("storage/levels/thumbnail/k6KTd0cLKyfMJ2iccxVeMw7y3uviGLreFyCFYdtS.jpg");
        */
        $data =  $validator->validated();
        if (request()->image != '') {
          $data['image'] = upload_image('levels', request()->image, 1, 'image');
        }
        Level::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('level'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $level = Level::find( $id );
        delete_image($level->icon);
        $level->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'level';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $level = Level::find( $item );
                delete_image($level->icon);
            }


            Level::destroy(request('item'));
        } else {
            $level = Level::find( request('item') );
            delete_image($level->icon);
            $level->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'level';
        return redirect(aurl($path_));

    }


}
