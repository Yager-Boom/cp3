<?php
namespace App\Services;

use App\User;
use App\Store;
use App\Repositories\StoreRepository;

class StoreService
{
    public function __construct(StoreRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

	public function getLists($userId)
	{		
		$stores = $this->storeRepository->getStoreList($userId);

		return $stores;
	}

	public function getOne($userId, $storeId)
	{
        $store = $this->storeRepository->getStore($userId, $storeId);

        return $store;
	}

	public function addStore($user, $request)
	{
		$store = new Store(array(
	        'domain' => $request->domain,
	        'shippingfree' => $request->shippingfree,
	        'fee' => $request->fee
	    ));
	    $store = $user->stores()->save($store);
	}
	// 存取repo計算報表需要用到的參數
}