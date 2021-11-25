<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\RegisterDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Register;

use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller {


//========================================= index =========================================

    public function index(RegisterDatatable $register) {
        return $register->render('admin.registers.index', ['title' => 'التسجيلات']);
    }


//========================================= destroy =========================================
    public function destroy($id) {

        $register = Register::find( $id );
        $register->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'register?type='.request()->type;
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $register = Register::find( $item );
            }
            Register::destroy(request('item'));
        } else {
            $register = Register::find( request('item') );
            $register->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'register?type='.request()->type;
        return redirect(aurl($path_));

    }

}
