<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  use SoftDeletes;

  protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

  public function scopeSortByDesc($query,$key)
  {
    return $query->orderBy($key,'desc');
  }

  public function scopeSortBy($query,$key)
  {
    return $query->orderBy($key);
  }

  public function subs()
  {
    return $this->hasMany('App\Model\Category','parent_id','id');
  }

  public function root()
  {
    return $this->belongsTo('App\Model\Category','root_id','id');
  }

  public function parent()
  {
    return $this->belongsTo('App\Model\Category','parent_id','id');
  }
}