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
		$username = session('username');
		$user = $users -> where("username='".$username."'")->find();
		$id = $user['id'];
		$data = array('username'=>$_POST['username'],'sex'=>$_POST['sex'],
			'status' =>$_POST['status'],'address'=>$_POST['address'],'workaddress'=>$_POST['workaddress'],
			'userarticle'=>$_POST['userarticle']);
		if($users->where("id=$id")->setField($data))
			$this->success('个人信息更新成功！',U('/Account/index'));
		//redirect("__URL__/index");
	}
	function quit(){
    	session(null);//清空所有session信息
		redirect(U('/Login/index'),0, '重新登录');
    }

}


?>
