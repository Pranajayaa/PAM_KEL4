<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['personal_shopper_id','name','phone','email','status','created_by','updated_by'];

    public function personalshopper()
    {
        return $this->belongsTo('App\Models\Categories', 'category_id', 'id');
    }
}
