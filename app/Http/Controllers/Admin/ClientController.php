<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\ClientDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;

use Illuminate\Support\Facades\Validator;


class ClientController extends Controller {


//========================================= index =========================================

    public function index(ClientDatatable $client) {
        return $client->render('admin.clients.index', ['title' => 'عملاؤنا']);
    }



//========================================= create =========================================
    public function create() {
        return view('admin.clients.create', ['title' => 'اضافة عميل جديد' ]);
    }


//========================================= store =========================================
    public function store(Request $request) {


        $validator = Validator::make(request()->all(),
            [
                'image'  => 'required|image',
            ], [], []
        );

        if ($validator->fails())
        {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }

        $data =  $validator->validated();

        if (request()->image != '') {
            $data['image']  = upload_image('clients',request()->image, 1, 'image');
        }

        Client::create($data);

        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('client'));

    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }



//========================================= edit =========================================
    public function edit($id) {

        $client = Client::find($id);
        $title = ' تعديل بيانات '. $client->id ;
        return view('admin.clients.edit', compact('client', 'title'));

    }
//========================================= update =========================================
    public function update(Request $r, $id) {

        $validator = Validator::make(request()->all(),
            [
                'image'  => 'nullable|image',
            ], [], []
        );

        if ($validator->fails())
        {
            $errors = collect( $validator->errors() )->flatten(1);
            foreach ($errors as $error) {
                toastr()->warning( $error , trans('admin.Message_title_attention'));
            }
            return back()->withInput();
        }

        $data =  $validator->validated();

        if (request()->image != '') {
            $data['image']  = upload_image('clients',request()->image, 1, 'image');
        }


        Client::where('id', $id)->update($data);
        toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
        return redirect(aurl('client'));

    }



//========================================= destroy =========================================
    public function destroy($id) {

        $client = Client::find( $id );
        delete_image($client->image);
        $client->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'client';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $client = Client::find( $item );
                delete_image($client->image);
            }


            Client::destroy(request('item'));
        } else {
            $client = Client::find( request('item') );
            delete_image($client->image);
            $client->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'client';
        return redirect(aurl($path_));

    }


}
