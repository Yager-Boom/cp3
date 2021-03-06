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
        $uid = $this->User()->id;
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
        $citem = $_GET['category'];
        $sort = 0;
        $ctguid = $this->getRadomStr();
        try
        {
            $now = date("Y/m/d H:i ");
            \DB::table('categories')
               ->insert
               ([
                'ctguid' => $ctguid,
                'citem' => $citem,
                'sort' => $sort,
                'created_at' => $now
               ]);
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {

            }
        }

        //這邊要更新商店頁的show，因此會呼叫CategoryService的details
//        $uid=$this->User()->id;
//        $details = $this->categoryService->details($uid);
//        return $details;
    }

    public function edit(Request $request)
    {
        $store_id = $request->store_id;
        $category = $request->category;
        $uid=$this->User()->id;
        $details = $this->categoryService->details($uid);
        return view('backend.categorys.edit',compact('category','store_id','details'));
    }

    public function update(Request $request)
    {
        $now = date("Y/m/d H:i ");
        \DB::table('categories')
            ->where('ctguid',$request['ctguid'])
            ->update
            ([
                'limit_group' => $request['limit_group'],
                'banner' => $request['banner'],
                'citem' => $request['citem'],
                'sort' => $request['sort'],
                'updated_at' => $now
            ]);
        return redirect('/backend/stores/'.$request['store_id'].'/category');
    }

    public function destroy(Request $request)
    {
        $nid = $request['nid'];
        $this->categoryService->destroy($nid);
        return redirect('/backend');
    }
}