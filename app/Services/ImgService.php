<?php
namespace App\Services;
use Input;

class ImgService
{
    /**
     * 存放到正式路徑/imgs/$tmpPath     
     * @param  string  $tmpPath
     * @return stores
     */
    public function saveFile($file, $savePath)
    {       
        if(isset($file))
        {
            // 取得副檔名(jpg,jpeg...等)
            $extension = $file->getClientOriginalExtension();
            // 隨機給一個新的檔案名
            $file_name = strval(time()) . str_random(5) . '.' . $extension;
            // 指定圖片要移動的位置
            $destination_path = public_path() . '/imgs/store/'. $savePath . '/';
            $upload_success = $file->move($destination_path, $file_name);
            $resources = "/imgs/store/$savePath/$file_name";
            $result = $resources;
        }else{
            $result = '';
        }

        return $result;
    }
    /**
     * 存放到暫存路徑/tmp/$tmpPath     
     * @param  string  $tmpPath
     * @return stores
     */
	public function tmpFile($file, $tmpPath)
	{		
		if(isset($file))
        {
            // 取得副檔名(jpg,jpeg...等)
            $extension = $file->getClientOriginalExtension();
            // 隨機給一個新的檔案名
            $file_name = strval(time()) . str_random(5) . '.' . $extension;
            // 指定圖片要移動的位置
            $destination_path = public_path() . '/tmp/'. $tmpPath . '/';
            $upload_success = $file->move($destination_path, $file_name);
            $resources = "/tmp/$tmpPath/$file_name";
            $result = $resources;
        }
        else
        {
            $result = '';
        }

		return $result;
	}
    /**
     * 從暫存的路徑搬到正式路徑
     * 暫存路徑, 商店alias
     * @param  string  $tmpPath, $newPath
     */ 
    public function move($tmpPath, $newPath)
    {   
        $ori_path = public_path() . "/tmp/$tmpPath/";//來源目錄
        $move_path = public_path() . "/imgs/store/$newPath/";//新路徑目錄
        $cmd = "mv $ori_path $move_path";

        exec($cmd);
    }
}