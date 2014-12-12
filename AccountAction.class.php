<?php

class AccountAction extends Action{
	function index(){
		$username = session('username');
		$users = M('account');
		$user = $users -> where("username='".$username."'")->find();
		$this->assign('username',$username);
		$this->assign('user_account',$user);
		$this->display();
	}

	function update(){
		$users = M('account');
		$user = $users -> where("username='".$username."'")->find();
		$id = $user['id'];
		$data = array('username'=>$_POST['username'],'nickname'=>$_POST['nickname'],
			    'realname'=>$_POST['realname'],'sex'=>$_POST['sex'],'birthday' =>$_POST['birthday'],
			    'email'=>$_POST['email'],'userarticle'=>$_POST['userarticle']);
		$users->where('id='.$id)->setField($data);
		redirect("_URL_/".$one['tid']);
	}
}


?>