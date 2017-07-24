<?php
namespace App\Repositories;

use DB;
use App\Store;
use Illuminate\Database\Eloquent\Collection;

class StoreRepository
{    
    /**
     * 確認這個人是不是擁有這間店
     *
     * @param  string|null  $userId, $storeId
     * @return stores
     */
    public function getStore($userId, $storeId)
    {        
        $result = DB::table('user_stores')->select('*')
                ->join('stores', 'stores.id', '=', 'user_stores.store_id')
                ->where('user_stores.user_id', '=', $userId)
                ->where('stores.id', '=', $storeId)
                ->get();
        
        return $result;
    }
    /**
     * 取得這個人所有的店
     *
     * @param  string|null  $userId
     * @return stores
     */
    public function getStoreList($userId)
    {
        $ids = DB::table('user_stores')->where('user_id', '=', $userId)->get();

        if($ids->isEmpty()){
            $result ='';
        }
        else{
            foreach ($ids as $value ) {
                $queryStr[] = $value->store_id;
            }
            $result = DB::table('stores')
                        ->select('*')
                        ->whereIn('id', $queryStr)
                        ->get();
        }

        return $result;
    }
}