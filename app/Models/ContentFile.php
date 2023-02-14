<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentFile extends Model
{
  static $rules = [
    'content_id' => 'required',
    'file' => 'required',
    'file_dir' => 'required',
  ];

  protected $fillable = ['content_id', 'file', 'file_dir'];
}
