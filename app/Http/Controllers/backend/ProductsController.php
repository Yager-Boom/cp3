<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\ImgService;
use App\Services\ProductService;

use App\Store;
use App\Product;

class ProductsController extends Controller
{
	public function __construct(ImgService $imgService, ProductService $ProductService)
    {
        $this->imgService = $imgService;
        $this->ProductService = $ProductService;
    }    

	public function index(Request $request)
	{
        $products = $this->ProductService->getLists($request->store_id);

		return view('backend.products.index', compact('products', 'request'));
	}

	public function show(Request $request)
	{
		$product = Product::find(1);

		return view('backend.products.show', compact('product'));
	}

	public function create(Request $request)
    {
		
		$store = Store::find($request->store_id);
		$randStr =$this->getRadomStr();
        
        return view('backend.products.create', compact('randStr', 'store'));
	}

	public function store(Request $request)
    {
		try {
			$store = Store::find($request->store_id);
			// 指定cover存放的路徑
			$savePath = $store->alias . '/' . $this->getRadomStr();
			if (Input::hasFile('cover')) {
                $cover = $this->imgService->saveFile(Input::file('cover'), $savePath);
            } else {
                $cover = "";
            }
            $product = new Product();
            $product->store_id = $store->id;
			// 處理字串
            $product->sn = $request->sn;
            $product->alias = $request->alias;
            $product->title = $request->title;
            $product->cover = $cover;
            $product->cost_price = $request->cost_price;
            $product->default_price = $request->default_price;
            $product->content = str_replace('tmp',"imgs/store/$store->alias",$request->content);
            $product->save();
			// 搬移資料(來源/tmp/$request->tmpPath, 目的/store/$store->alias)
			$result = $this->imgService->move($request->tmpPath, $store->alias);
            return redirect('/backend/stores/'. $store->id );
        }
        catch (\Exception $e)
        {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect('/backend');
            }
        }		
	}
    public function destroy(Request $request)
    {
        dd($request['product_id']);
    }
}