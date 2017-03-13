<?php
namespace app\index\controller;

interface oneapi{
	public function eat();
	public function see();
}

class Base implements oneapi
{

	
	private $privates;
	
	public function index()
	{
		$a = "a";
		return $a;
	}
	
	public function eat(){
		
	}
	
	public function see(){
		
	}
	
}
