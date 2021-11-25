<?php

namespace App\Http\Controllers\Driver;

use App\Http\Traits\Upload_Files;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminResetPassword;
use Carbon\Carbon;
use DB;
use Mail;
use Illuminate\Validation\Rule;

class DriverProfileController extends Controller
{
    use Upload_Files;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('driver.profile.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $driver = driver()->user();
       $data = $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>Rule::unique('drivers')->ignore($driver->id),
            'phone' => 'nullable',
            'logo' => 'nullable|image',
            'address_1' => 'nullable',
            'address_2' => 'nullable',
            'city' => 'nullable',
            'postcode' => 'nullable',
            'password' => 'nullable',
        ]);
       if ($request->password) $data['password']  = bcrypt($request->password);
       else $data['password']  = $driver->password;
        if ($request->hasFile('logo')){
            $data['logo'] = $this->uploadFiles('drivers',
                $request->file('logo'), $driver->logo);
        }

        $driver->update($data);
        toastr()->success(trans('admin.login_message'));
        return redirect()->back();

    }//end function

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


}//end controller
