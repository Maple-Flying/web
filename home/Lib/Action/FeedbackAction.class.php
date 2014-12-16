<?php
/**
* 前台首页
*/
class FeedbackAction extends Action
{ 
	function index(){

		if(session('?username'))
			$this->assign('username',session('username'));
		$this->display();
	}

	function add(){
	    $feedback = M('feedback');
		$username = session('username');
		$feedback->create();
		$feedback->op1 =$_POST['op1'];
		$feedback->reason1 =$_POST['reason1'];
		$feedback->op2 =$_POST['op2'];
		$feedback->reason2 =$_POST['reason2'];
		$feedback->op3 =$_POST['op3'];
		$feedback->reason3 =$_POST['reason3'];
		$feedback->op4 =$_POST['op4'];
		$feedback->reason4 =$_POST['reason4'];
		$feedback->op5 =$_POST['op5'];
		$feedback->reason5 =$_POST['reason5'];
		$feedback->op6 =$_POST['op6'];
		$feedback->reason6 =$_POST['reason6'];
		$feedback->op7 =$_POST['op7'];
		$feedback->reason7 =$_POST['reason7'];
		$feedback->op8 =$_POST['op8'];
		$feedback->reason8 =$_POST['reason8'];
		$feedback->op9 =$_POST['op9'];
		$feedback->reason9 =$_POST['reason9'];
		$feedback->text =$_POST['text'];
		$feedback->user=$username;
		// $feedback->add();
		// $this->success();
		if($feedback->add()){
			$this->success('感谢您的反馈！',U('../Index/index/'));	
			//redirect(U('../Index/index/'),0,"Thanks");
			}else{
				$this->error('笔记添加失败，返回上级页面');
			}	
		
	}
	
}
 