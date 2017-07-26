<?php

namespace App\Http\Controllers\Backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Repositories\PageRepository;

use App\Store;
use App\Page;

class PagesController extends Controller
{
	public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    } 

    public function index(Request $request)
    {
    	$pages = $this->pageRepository->getList($request->store_id);
    	// dd($pages);
    	return view('backend.pages.index', compact('request','pages'));
    }

    public function create(Request $request)
    {
    	$store = Store::find($request->store_id);

    	return view('backend.pages.create', compact('store'));
    }

    public function store(Request $request, $storeId)
    {
    	$store = Store::find($storeId);

    	$pages = new Page;
    	$pages->store_id = $storeId;
    	$pages->alias = $request->alias;
    	$pages->title = $request->title;
    	$pages->content = $request->content;
    	$pages->save();

    	return redirect('/backend/stores/'.$storeId.'/pages');
    }

    public function show(Request $request, $storeId, $alias)
    {
    	$page = $this->pageRepository->getPage($storeId, $alias);
    	$page = $page->first();
    	
    	return view('backend.pages.show', compact('page', 'storeId'));
    }

    public function edit($storeId, $alias)
    {
    	$page = $this->pageRepository->getPage($storeId, $alias);
    	$page = $page->first();

    	return view('backend.pages.edit', compact('page', 'storeId'));
    }

    public function update(Request $request, $storeId, $alias)
    {
    	$page = $this->pageRepository->getPage($storeId, $alias);
    	$page = $page->first();

    	$page = Page::find($page->id);
    	$page->status = $request->status;
    	$page->alias = $request->alias;
    	$page->title = $request->title;
    	$page->content = $request->content;
    	$page->save();

    	return redirect('/backend/stores/'.$storeId.'/pages');    	
    }

    public function destroy($storeId, $alias)
    {
    	$page = $this->pageRepository->getPage($storeId, $alias);
    	$page = $page->first();
    	
    	$page = Page::find($page->id);
    	$page->delete();

    	return redirect('/backend/stores/'.$storeId.'/pages');
    }
}
