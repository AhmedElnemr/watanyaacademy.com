<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $guarded = [];


    public function level_fk()
    {
        return $this->hasOne('App\Models\Level', 'id', 'level_id');
    }


}
