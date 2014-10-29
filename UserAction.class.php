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
		//$regdate = time();
		if($username == "" || $psw == "" || $email == "")
		{
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
		}
		else
		{
				$conn = @mysql_connect("localhost","root","");
				if (!$conn){
		    		die("连接数据库失败：" . mysql_error());
				}
				mysql_select_db("rubydb", $conn);
				//字符转换，读库
				mysql_query("set character set 'gbk'");
				//写库
				mysql_query("set names 'gbk'");
				$check_query = mysql_query("select * from think_user where username='$username'");
				if(mysql_fetch_array($check_query))	//如果已经存在该用户
				{
					echo "<script>alert('用户名已存在'); history.go(-1);</script>";
				}
				else	//不存在当前注册用户名称
				{
					$password = MD5($psw);
					$createtime = time();
					$sql = "INSERT INTO think_user(username,password,email,createtime)VALUES('$username','$password','$email','$createtime')";
					if(mysql_query($sql,$conn))
					{
						echo "<script>alert('注册成功！'); history.go(-1);</script>";
					}
					else
					{
						echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
					}
				}
		}
	}
}
?>
