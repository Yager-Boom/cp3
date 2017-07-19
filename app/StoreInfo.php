<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreInfo extends Model
{
    function show($storeId)
    {
        return \DB::table('stores')
                  ->where('id',$storeId)
                  ->get();
    }
}
