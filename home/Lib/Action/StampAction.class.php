<?php

class StampAction extends Action{
	private  $title_item;
	/**
     * @函数	index
     * @功能	显示主页面
     */
	function index(){
		if(session('?username'))
			$this->assign('username',session('username'));
		$username=session('username');
		$allaccount=M('account');
		$account=$allaccount->where("username='".$username."'")->find();
		$this->assign('account',$account);
		$this->display();
	}
	function update(){
		
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