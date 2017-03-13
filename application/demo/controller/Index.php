<?php
namespace app\demo\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index($name = "迪迦")
    {
		$date = self::dicos();
		$case = Db::name('data') -> find();
		$this->assign("name",$name);
		$this->assign("date",$date);
		$this->assign("result",$case);
        return $this->fetch();
    }
	
	private function dicos(){
		var_dump(time());
	}
}
