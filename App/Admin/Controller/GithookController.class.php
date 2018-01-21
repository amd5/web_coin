<?php
namespace Admin\Controller;

use Common\Controller\CommonController;

class GithookController extends CommonController {
	public function index()
	{
		echo "sssss";
	}

	public function a1()
	{
		echo "webhooksf</br>";
        error_reporting ( E_ALL );
        $dir = '/home/wwwroot/web/domain/blog.19aq.com/web/';//该目录为git检出目录
        $handle = popen('cd '.$dir.' && git pull 2>&1','r');
        $read = stream_get_contents($handle);
        printf($read."</br>");
        pclose($handle);
	}

}