<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable {

	use Notifiable;
	//
	protected $table = 'admins';

  protected $guarded=[];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];


	public function group_id()
	{
		return $this->hasOne('App\Models\AdminGroup', 'id', 'group_id');
	}

	public function group()
	{
		return $this->hasOne('App\Models\AdminGroup', 'id', 'group_id');
	}

	public function department_fk()
	{
		return $this->hasOne('App\Models\Department', 'id', 'department_id');
	}
	public function parent_fk()
	{
		return $this->hasOne('App\Admin', 'id', 'parents');
	}

    public function files() {
        return $this->hasMany('App\Models\Files\Restaurant_image', 'relation_id', 'id');
    }

    public function files_( $file_type ) {
        return $this->hasMany('App\Models\Files\Restaurant_image', 'relation_id', 'id')->where('file_type', $file_type);
    }


}
