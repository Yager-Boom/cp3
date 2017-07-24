<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\StoreService;
use App\Services\ImgService;

use App\Store;

class CategoryController extends Controller
{
    public function __construct(StoreService $storeService, ImgService $imgService)
    {
        $this->middleware('isStore');
        $this->storeService = $storeService;
        $this->imgService = $imgService;
    }

    function index()
    {
        $stores = $this->storeService->getLists($this->User()->id);
        $uid=$this->User()->id;
        $details = \DB::table('user_stores')
                      ->join('navs','navs.store_id', 'user_stores.store_id')
                      ->join('stores','stores.id', 'navs.store_id')
                      ->where('user_stores.user_id',$uid)
                      ->get();
        dd($stores->id);
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
               ->insert([
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
}