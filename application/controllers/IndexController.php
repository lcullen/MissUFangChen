<?php
require_once(dirname(__DIR__).'/service/PicService.php');
require_once(dirname(__DIR__).'/service/RadarGraphSevice.php');
class IndexController extends Controller
{
	public function index()
	{
	    RadarGraphSevice::demo();
	}

	public function getPostData()
	{
        exit;
		$info['name'] = $_POST['new_name'];
        $info['rtime'] = date("Y-m-d");
        $info['active_score'] = (int)$_POST['active_score'];
        $info['sport_score'] = (int)$_POST['sport_score'];
        $info['learn_score'] = (int)$_POST['learn_score'];
        $info['level_score'] = (int)$_POST['level_score'];
        $model = new DailyTopKid();
        $count = $model->add($info);
        if($count){
            PicService::saveByName($info['name']);
        }
	}
}