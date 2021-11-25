<?php

namespace App\Http\Controllers\Driver;

use App\Models\Driver;
//use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminResetPassword;
use Carbon\Carbon;
use DB;
use Mail;

class DriverAuthController extends Controller
{

    /**
     *
     * @return mixed
     *
     * Driver Login View
     *
     */
    public function login()
    {
        if (auth()->guard('driver')->check()){
            return redirect(durl('/'));
        }
        return view('driver.driverAuth.login');
    }

    /**
     * @return mixed
     *
     * Driver Login Action
     */

    public function doLogin()
    {

        if (
            driver()->attempt(
            ['email' => request('email'), 'password' => request('password')]
            , request('rememberme') == 1?true:false))
        {

            //---------------blocked----------------------
            $driver = driver()->user();
            if ($driver->is_blocked == 'blocked'){
                auth()->guard('driver')->logout();
                toastr()->error( 'تم ايقاف حسابك' , trans('admin.Message_title_attention'));
                return redirect(durl('login'));
            }
            //--------------success------------------------
            toastr()->success(trans('admin.login_message'));
            return redirect('driver');
        } else {
            toastr()->error( 'الايميل و / او كلمة المرور غير صحيح' , trans('admin.Message_title_attention'));
            return redirect(durl('login'));
        }
    }//end fun

    /**
     * @return mixed
     *
     * Driver Logout
     */

    public function logout()
    {

        auth()->guard('driver')->logout();
        toastr()->success(trans('admin.logout_message'));
        return redirect(durl('login'));

    }//end fun


    /**
     * @return mixed
     *
     * forget Password View
     *
     */

    public function forgot_password()
    {
        return view('driver.driverAuth.forgot_password');
    }


    /**
     * @return mixed
     *
     * Forget Password Action
     *
     */
    public function forgot_password_post()
    {
        $driver = Driver::where('email', request('email'))->first();
        if (!empty($driver)) {
            $token = app('auth.password.broker')->createToken($driver);
            $data  = DB::table('password_resets')->insert([
                'email'      => $driver->email,
                'token'      => $token,
                'created_at' => Carbon::now(),
            ]);
            Mail::to($driver->email)->send(new AdminResetPassword(['data' => $driver, 'token' => $token]));
            session()->flash('success', trans('admin.the_link_reset_sent'));
            return back();
        }
        session()->flash('error', 'Error Email ....!' );
        return back();
    }//end fun

    /**
     * @param $token
     * @return mixed
     *
     * reset email
     *
     */
    public function reset_password_final($token)
    {
        $this->validate(request(), [
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [], [
            'password'              => 'Password',
            'password_confirmation' => 'Confirmation Password',
        ]);
        $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if (!empty($check_token)) {
            $driver = Driver::where('email', $check_token->email)->update([
                'email'    => $check_token->email,
                'password' => bcrypt(request('password'))
            ]);
            DB::table('password_resets')->where('email', request('email'))->delete();
            driver()->attempt(['email' => $check_token->email, 'password' => request('password')], true);
            return redirect(durl());
        } else {
            return redirect(durl('forgot/password'));
        }
    }//end fun

    /**
     * @param $token
     * @return mixed
     *
     * reset Password
     */

    public function reset_password($token)
    {
        $check_token = DB::table('password_resets')
            ->where('token', $token)
            ->where('created_at', '>', Carbon::now()->subHours(2))->first();
        if (!empty($check_token)) {
            return view('driver.driverAuth.reset_password', ['data' => $check_token]);
        } else {
            return redirect(durl('forgot/password'));
        }
    }//end fun

}//end controller
