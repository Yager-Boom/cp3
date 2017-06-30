<?php
namespace App\Services;

class ImgService
{
	public function savelogo($file)
	{
		$result = $this->procFile($file);
        
        return $result;
	}
    
	public function procFile($file)
	{		
		if(isset($file))
        {
        	// 取得副檔名(jpg,jpeg...等)
            $extension = $file->getClientOriginalExtension();
            // 隨機給一個新的檔案名
            $file_name = strval(time()) . str_random(5) . '.' . $extension;
            // 指定圖片要移動的位置
            $destination_path = public_path() . '/imgs/store/logo/';            
            $upload_success = $file->move($destination_path, $file_name);
            $resources = "/imgs/store/logo/$file_name";
            $result = $resources;
        }
        else
        {
            $result = '';
        }

		return $result;
	}
}