<?php

namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;
use App\Repositories\BannerRepository;
use App\Repositories\PageRepository;

use App\Store;
use App\User;

class FlowsController extends Controller
{
	public function __construct(StoreService $storeService, ImgService $imgService, BannerRepository $bannerRepository, PageRepository $pageRepository)
    {
        $this->middleware('isStore');
		$this->storeService = $storeService;
        $this->imgService = $imgService;
        $this->bannerRepository = $bannerRepository;
        $this->pageRepository = $pageRepository;
    }

	public function company()
	{
		$stores = $this->storeService->getLists($this->User()->id);

        return view('backend.flows.company', compact('stores'));
	}
}