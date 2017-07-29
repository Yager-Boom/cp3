<?php namespace App\Http\Controllers\backend;

use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController as Controller;
use App\Services\ImgService;


class ImagesController extends Controller
{
    public function __construct(ImgService $imgService)
    {
        $this->imgService = $imgService;
    }    
    // 暫存
    public function uploadFile(Request $request)
    {
        // echo $request->tmpPath;
        $file = Input::file('file');
        
        $result = $this->imgService->tmpFile($file, $request->tmpPath);
        
        return $result;
    }    
}