<?php

class ModifyAction extends Action{
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
		$this->assign('btn_ok_act','update');
		$this->display();
	}
	/**
     * @函数	quit
     * @功能	登出账户，跳转至登录页面。并清除Session
     */
	function modify(){
		$username = session('username');
		$useraccount = M('account');
		$allusers = M('user');
		$user = $useraccount->where("username='".$username."'")->find();
		$oneuser = $allusers->where("username='".$username."'")->find();
		if($user['password']==md5($_POST['oldpwd']))
		{
			if($_POST['newpwd']==$_POST['confirm']){
				$data=array('password' => md5($_POST['newpwd']));
				$useraccount->where("username='".$username."'")->setField($data);
				$allusers->where("username='".$username."'")->setField($data);
				$this->success('密码修改成功！');
			}
			else{
				$this->error('两次新密码不一致，请重新输入！');
			}
		}
		else{
			$this->error('输入密码有误，请重新输入！');
		}
	}
	function quit(){
    	session(null);//清空所有session信息
		redirect(U('/Login/index'),0, '重新登录');
    }
}
?>