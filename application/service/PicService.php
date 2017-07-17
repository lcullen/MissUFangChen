<?php

/**
 * Created by PhpStorm.
 * User: luoxiaowei
 * Date: 2017/7/17
 * Time: 下午12:59
 */
class PicService
{
    public static function saveByName($name)
    {
        if($name)
        {
            $nameEnc = md5($name);
            if(file_exists($nameEnc.'png'))
                return 0;
            $fileName = APP_PATH."pic/$nameEnc.png";
            move_uploaded_file($_FILES['pic_file']['tmp_name'],$fileName);
        }
    }
}