<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function permissions()
  {
    return $this->hasMany('App\Permission');
  }
  public function roles()
    {
      return $this->belongsToMany('App\Role','role_resources');
    }

}
