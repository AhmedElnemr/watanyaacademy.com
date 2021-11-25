<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    protected $guarded = [];

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'level_id', 'id');
    }
}
