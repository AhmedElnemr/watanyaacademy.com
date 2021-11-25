<?php
namespace App\Http\Controllers\Admin;

// use admin datatable
use App\DataTables\ContactDatatable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

use Illuminate\Support\Facades\Validator;


class ContactController extends Controller {


//========================================= index =========================================

    public function index(ContactDatatable $contact) {
        return $contact->render('admin.contacts.index', ['title' => 'تواصل بنا']);
    }


//========================================= show =========================================
    public function show($id)
    {
        //
    }


//========================================= destroy =========================================
    public function destroy($id) {

        $contact = Contact::find( $id );
        delete_image($contact->icon);
        $contact->delete();

        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'contact';
        return redirect(aurl($path_));

    }

//========================================= multi_delete =========================================
    public function multi_delete() {

        // return request()->all();

        if (is_array(request('item'))) {

            foreach (request('item') as $item)
            {
                $contact = Contact::find( $item );
                delete_image($contact->icon);
            }


            Contact::destroy(request('item'));
        } else {
            $contact = Contact::find( request('item') );
            delete_image($contact->icon);
            $contact->delete();
        }
        toastr()->success(trans('admin.Message_delete'), trans('admin.Message_title_congratulation'));
        $path_ = 'contact';
        return redirect(aurl($path_));

    }


}
