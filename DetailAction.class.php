<?php

class DetailAction extends Action{
	private  $title_item;
	/**
     * @函数	index
     * @功能	显示主页面
     */
	function index(){
		header("Content-Type:text/html; charset=utf-8");
		if(session('?username'))
			$this->assign('username',session('username'));
		$id=$_GET['id'];
		$article=M('article');
		$article_item=$article->where("id=$id")->find();		
		$this->assign('article_item',$article_item);	
		$this->display();
	}
}
?>