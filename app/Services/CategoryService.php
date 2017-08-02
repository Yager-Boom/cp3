<?php
namespace App\Services;

use App\User;
use App\Category;

class CategoryService
{
    public function details($uid)
    {
        return  \DB::table('categories')
                   ->select('*','categories.id as nid', 'user_stores.store_id as usid')
                   ->leftjoin('categories','categories.ctguid', 'user_stores.store_id')
                   ->leftjoin('stores','stores.id', 'categories.store_id')
                   ->where('user_stores.user_id', $uid)
                   ->get();
    }
    public function destroy($nid)
    {
        \DB::table('categories')
           ->where('id', $nid)
           ->delete();
    }
}