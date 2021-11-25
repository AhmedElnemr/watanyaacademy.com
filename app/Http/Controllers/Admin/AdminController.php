<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\AdminDatatable;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

use app\Admin;

use App\Models\City;
use App\Models\Neighborhood;
use App\Models\Department_markter;

use Illuminate\Support\Facades\Validator;


class AdminController extends Controller {

//	public function __construct()
//  {
//      $this->middleware('permission:admin_show'   , ['only' => 'index', 'show']);
//      $this->middleware('permission:admin_edit'   , ['only' => 'edit', 'update']);
//      $this->middleware('permission:admin_delete' , ['only' => 'destroy', 'multi_delete']);
//      $this->middleware('permission:admin_add'    , ['only' => 'create', 'store']);
//  }




    //========================================= index =========================================
	public function index(AdminDatatable $admin) {
		// Request()->session()->forget('lang');
		// Request()->session()->put('lang', 'en' );
		return $admin->render('admin.admins.index', ['title' => 'Admins']);
		// $admins = Admin::all();
		// return view( 'admin.admins.indexdt', compact('admins') );
	}


 //========================================= create =========================================
	public function create() {
			return view('admin.admins.create', [ 'title' => trans('admin.create_admin') ]  );
	}


//========================================= store =========================================
	 public function store() {


//	    return request()->all();

			$validator = Validator::make(request()->all(),
					[
						'name'     => 'required',
						'email'    => 'required|email|unique:admins',
						'password' => 'required|min:6',
//						'group_id' => 'required',


					], [], [
						'name'     => trans('admin.name'),
						'email'    => trans('admin.email'),
						'password' => trans('admin.password'),
//						'group_id' => 'الصلاحية مطلوبة',
					]
				);

	        if ($validator->fails()) {
                    $errors = collect( $validator->errors() )->flatten(1);
                    foreach ($errors as $error) {
                        toastr()->warning( $error , trans('admin.Message_title_attention'));
                    }
                    return back()->withInput();
	        }


//         if (request()->admin_type == 'admin' && request()->group_id == '' ) {
//                 toastr()->warning( 'التصريح مطلوب' , trans('admin.Message_title_attention'));
//                 return back()->withInput();
//         }

	           $data =  $validator->validated();

				$data['password'] = bcrypt(request('password'));


                 if (request()->image != '') {
                     $data['image']  = upload_image('admins',request()->image, 1, 'image');
                 }


                Admin::create($data);

            toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
            return redirect(aurl('admin'));

 	}

//========================================= show =========================================
	public function show($id) {
		//
	}


//========================================= edit =========================================
	 public function edit($id) {

		 		$admin = Admin::find($id);
		 		$title = trans('admin.edit');
		 		return view('admin.admins.edit', compact('admin'));

 	}

//========================================= update =========================================
	 public function update(Request $r, $id) {

         $validator = Validator::make(request()->all(),
             [
                 'name'     => 'required',
                 'email'    => 'required|email|unique:admins,email,'.$id,
//                 'group_id' => 'required',


             ], [], [
                 'name'     => trans('admin.name'),
                 'email'    => trans('admin.email'),
//                 'group_id' => 'الصلاحية مطلوبة',
             ]
         );

         if ($validator->fails()) {
             $errors = collect( $validator->errors() )->flatten(1);
             foreach ($errors as $error) {
                 toastr()->warning( $error , trans('admin.Message_title_attention'));
             }
             return back()->withInput();
         }


//         if (request()->admin_type == 'admin' && request()->group_id == '' ) {
//             toastr()->warning( 'التصريح مطلوب' , trans('admin.Message_title_attention'));
//             return back()->withInput();
//         }

         $data =  $validator->validated();

         if ( request('password') != null ) {
             $data['password'] = bcrypt(request('password'));
         }

         if (request()->image != '') {
             $data['image']  = upload_image('admins',request()->image, 1, 'image');
         }


         Admin::where('id', $id)->update($data);


 		toastr()->success(trans('admin.Message_success'), trans('admin.Message_title_congratulation'));
 		return redirect(aurl('admin'));

 	}

	//========================================= destroy =========================================
	 public function destroy($id) {

	 		Admin::find($id)->delete();
			toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
	 		return redirect(aurl('admin'));

 	}

//========================================= multi_delete =========================================
 	public function multi_delete() {

		// return request()->all();

	 		if (is_array(request('item'))) {
	 			Admin::destroy(request('item'));
	 		} else {
	 			Admin::find(request('item'))->delete();
	 		}
	 		session()->flash('success', trans('admin.deleted_record'));
	 		return redirect(aurl('admin'));

 	}

//========================================= get district =========================================

    public function city_parent($city_id)
    {
        if ($city_id == '') {
            $html   = '<option value=""> اختر الحى اولا </option>';
        } else {
            $status = 0;
            $html = '';
            $city_id_   = City::where(['ar_city_title' => $city_id])->first()->id_city;
            $districts = Neighborhood::where(['city_id_fk' => $city_id_])->get();
            if ($districts->count() > 0)
            {
                $status = 1;
            }
            foreach ($districts as $district) {
                $html .= '<option value="'.$district->ar_neighborhood.'">'.$district->ar_neighborhood.'</option>';
            }
        }

        return response()->json( ['html' => $html, 'status'=> $status] );
    }

}
