<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalShoppers extends Model
{
    protected $fillable = ['category_id','provider_name','name','description','stock','temporary_stock','status','wa_admin','created_by','updated_by'];

    public function personalShopperImages()
    {
        return $this->hasMany('App\Models\PersonalShopperImages', 'personal_shopper_id', 'id');
    }

    public function customer()
    {
        return $this->hasMany('App\Models\Customers', 'personal_shopper_id', 'id');
    }
}
