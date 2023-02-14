<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
  static $rules = [
    'page' => 'required',
    'content_type' => 'required',
    'title' => 'required',
  ];

  protected $fillable = ['page', 'content_type', 'title', 'body', 'file', 'file_dir', 'extra'];

  public function contentFiles()
  {
    return $this->hasMany('App\Models\ContentFile', 'content_id', 'id');
  }
}
