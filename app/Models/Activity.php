<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $guarded = [];




    public function activity_department_fk()
    {
        return $this->hasOne('App\Models\ActivityDepartment', 'id', 'activity_department_id');
    }



    public function images_fk() {
        return $this->hasMany('App\Models\Image', 'related_id', 'id');
    }


}
