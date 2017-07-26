<?php
namespace App\Repositories;

use DB;
use App\Page;
use Illuminate\Database\Eloquent\Collection;

class PageRepository
{
    public function getList($storeId)
    {
        $result = DB::table('pages')
	        	->where('store_id', '=', $storeId)
	        	->get();
	        	
        return $result;
    }	

    public function getPage($storeId, $alias)
    {
        $result = DB::table('pages')
                ->where('store_id', '=', $storeId)
	        	->where('alias', '=', $alias)
	        	->get();
	        	
        return $result;
    }

    public function showPage($storeId)
    {
        $result = DB::table('pages')
                ->where('store_id', '=', $storeId)
                ->where('status', '=', 1)
                ->get();
                
        return $result;
    }
}