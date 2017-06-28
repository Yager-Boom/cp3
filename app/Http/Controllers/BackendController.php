<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\User;
use Illuminate\Support\Facades\Auth;

class BackendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function User()
    {
        $user = User::find(Auth::id());
        
        return $user;
    }

    public function StoreInfo($storeId)
    {
        $stores = $this->storeRepository->getStore($this->User()->id, $storeId);
        return $stores;
    }

    public function StoreLists()
    {
        // 報表
        // $store_ids = $this->storeRepository->getStoreIds($this->User()->id);
        // dd($store_ids);
        $stores = $this->storeRepository->getStoreList($this->User()->id);

        return $stores;
    }
}
