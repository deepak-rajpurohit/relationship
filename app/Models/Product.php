<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public function seller(){
        return $this->belongsTo('App\Models\Seller');
    }
}
