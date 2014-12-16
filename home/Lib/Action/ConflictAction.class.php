<?php

class ConflictAction extends Action{
	function index(){
		header("Content-Type:text/html; charset=utf-8");
		if(session('?username'))
			$this->assign('username',session('username'));
		$id=$_GET['id'];
		$articles=M('article');
		$sarticle=$articles->where("id=$id")->find();
		$tid=$sarticle['tid'];
		$article=$articles->where("tid=$tid")->select();

		$subject=$_POST['aritcle'];
		$one=$articles->where("subject='".$subject."'")->find();
		$this->assign('tarticle',$one);

		$this->assign('sid',$id);
		$this->assign('sarticle',$sarticle);
		$this->assign('article_list',$article);
		$this->display();
	}
	function addconflict(){
		$id=$_GET['id'];
		$conflict=M('conflict');
		$conflict->create();
		$article=M('article');
		$subject1=$_POST['subject1'];
		$data1 = array('subject'=>$_POST['subject1'],'message'=>$_POST['myEditor1'],'lastmodifytime'=>time());
		$article->where("subject='".$subject1."'")->setField($data1);
		$subject2=$_POST['subject2'];
		$data2 = array('subject'=>$_POST['subject2'],'message'=>$_POST['myEditor2'],'lastmodifytime'=>time());
		$article->where("subject='".$subject2."'")->setField($data2);
		$conflict->sarticle=$subject1;
		$conflict->tarticle=$subject2;
		$conflict->mark=$_POST['mark'];
		$conflict->add();
		$this->success('添加矛盾成功！',U('/Detail/index/id/'.$_GET['id']));
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