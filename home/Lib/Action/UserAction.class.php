<?php 

class UserAction extends Action{
	function index(){

		$this->assign('title','师生讨论笔记');
		$this->display();
	}

	function user(){
		$username = $_POST["username"];
		$psw = $_POST["password"];
		$email = $_POST["email"];
		if(!$this->checklen($username)){
			echo "<script>alert('用户名长度必须在6~15个字符之间！'); history.go(-1);</script>";
		}
		else if($username == "" || $psw == "" || $email == "")
		{
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
		}
		else if (!ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+",$email)){ 
						echo "<script>alert('请输入正确的邮箱地址！'); history.go(-1);</script>";
			}
		else
		{		$adduser=M('user');
				$adduser->create();
				$adduser->username=$username;
				$adduser->password=MD5($psw);
				$adduser->email=$email;
				$adduser->createtime=time();
				$adduser->add();
				$useraccount=M('account');
				$useraccount->create();
				$useraccount->username=$username;
				$useraccount->password=MD5($psw);
				$useraccount->email=$email;
				$useraccount->add();
				session(username,$username);
				$this->success('注册成功!',U('/Index/index/username/'.$username));
		 }
	}
	function checklen($data){
			if(strlen($data)>15 || strlen($data)<6){
			return false;
		}
		return true;
	}
}
?>
