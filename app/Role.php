<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	public function resources()
    {
      return $this->belongsToMany('App\Resource','role_resources');
    }
}
