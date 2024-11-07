<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Product');
    }

    function ProductManyData(){
        // return $this->hasMany('App\Models\Product'); this is when we already have a field named seller_id

        //if seller_id has a different name like owner_id, then

        return $this->hasMany('App\Models\Product', 'owner_id');
    }
}
