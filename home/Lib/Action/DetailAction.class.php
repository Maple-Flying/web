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
		$allconflict=M('conflict');
		$article_item=$article->where("id=$id")->find();
		$conflict=$allconflict->where("sarticle='".$article_item['subject']."'")->select();
		$this->assign('article_item',$article_item);
		$this->assign('conflict',$conflict);
		$this->assign('sid',$id);
		$this->display();

	}
	/**
     * @函数	quit
     * @功能	登出账户，跳转至登录页面。并清除Session
     */
	function quit(){
    	session(null);//清空所有session信息
		redirect(U('/Login/index'),0, '重新登录');
    }
}
?>