<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;
use App\Services\CategoryService;

use App\Store;

class CategoryController extends Controller
{
    public function __construct(StoreService $storeService, ImgService $imgService, CategoryService $categoryService)
    {
        $this->middleware('isStore');
        $this->storeService = $storeService;
        $this->imgService = $imgService;
        $this->categoryService = $categoryService;
    }

    function index()
    {
        $stores = $this->storeService->getLists($this->User()->id);
        $uid=$this->User()->id;
        $details = $this->categoryService->details($uid);
        return view('backend.categorys.index',compact('stores','details'));
    }

    public function create(Request $request)
    {
        $stores = Store::find($request->store_id);
        return view('backend.categorys.create',compact('stores'));
    }

    public function store(Request $request)
    {
        try
        {
            $now = date("Y/m/d H:i ");
            \DB::table('navs')
               ->insert
               ([
                'store_id' => $request['store_id'],
                'link' => $request['link'],
                'position' => $request['position'],
                'nitem' => $request['nitem'],
                'sort' => $request['sort'],
                'created_at' => $now
               ]);
            return redirect('/backend/stores/'.$request['store_id'].'/category');
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect('/backend');
            }
        }
    }

    public function edit(Request $request)
    {
        $stores = $this->storeService->getOne($this->User()->id);
        $nid = $request['nid'];
        $edit_category = \DB::table('navs')
                        ->where('id',$nid)
                        ->get();
        $edit_category = $edit_category[0]->id;
        return view('backend.categorys.edit',compact('edit_category','stores'));
    }

    public function update()
    {

    }

    public function destroy(Request $request)
    {
        $nid = $request['nid'];
        $this->categoryService->destroy($nid);
        return redirect('/backend');
    }
}