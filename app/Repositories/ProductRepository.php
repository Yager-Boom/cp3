<?php
namespace App\Repositories;

use DB;
use App\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function getList($storeId)
    {
        $result = DB::table('products')
	        	->where('store_id', '=', $storeId)->get();
	        	
        return $result;
    }	
}