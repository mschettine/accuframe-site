<?php

namespace App;

use App\Admin;
use App\Comment;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
  use Searchable;
  
	protected $fillable = [
		'title', 'summary', 'admin_id', 'body'
	];

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function admin()
  {
    return $this->belongsTo(Admin::class);
  }
}
