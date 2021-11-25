<?php

namespace App;

use App\Models\Favorite;
use App\Models\StudentExamRates;
use App\Models\Vendor;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'phone_login',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id')->withDefault();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class,'user_id');
    }

    public function stage_fk()
    {
        return $this->hasOne('App\Models\Stage', 'id', 'stage_id');
    }

    public function class_fk()
    {
        return $this->hasOne('App\Models\Class_', 'id', 'class_id');
    }


    public function department_fk()
    {
        return $this->hasOne('App\Models\Department', 'id', 'department_id');
    }

    public function student_rates()
    {
        return $this->hasMany('App\Models\StudentExamRates', 'student_id', 'id');
    }


}
