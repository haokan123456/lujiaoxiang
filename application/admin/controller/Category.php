<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Cate;

class Category extends Common
{
    public function index()
    {    	
      return view();
    }

    public function col(){
    	$rs=Cate::all();
    	return view();
    }

    public function add(){
    	$rs=input();
    	return view();
    }
}
