<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityDepartment extends Model
{
    protected $table = 'activity_departments';
    protected $guarded = [];

    public function activity_departments_fk()
    {
        return $this->hasMany('App\Models\Activity', 'activity_department_id', 'id');
    }

}
