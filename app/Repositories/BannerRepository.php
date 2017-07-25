<?php
namespace App\Repositories;

use DB;
use App\Banner;
use Illuminate\Database\Eloquent\Collection;

class BannerRepository
{
    public function getList($storeId)
    {
        $result = DB::table('banners')
	        	->where('store_id', '=', $storeId)
	        	->get();
	        	
        return $result;
    }	

    public function getBanner($storeId, $target)
    {
        $result = DB::table('banners')
	        	->where('store_id', '=', $storeId)
	        	->where('status', 1)
	        	->where('target', $target)
	        	->orderBy('sort')
	        	->get();
	        	
        return $result;
    }
}