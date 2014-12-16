<?php

class ArticleAction extends Action{

	private  $article_item;
	/**
     * @函数	index
     * @功能	显示主页面
     */
	function index(){
		header("Content-Type:text/html; charset=utf-8");
		if(session('?username'))
			$this->assign('username',session('username'));
		$tid=$_GET['tid'];

		if($id=$_GET['id']){
			$article=M('article');
			$article_item=$article->where("id=$id")->find();
			$this->assign('article_item',$article_item);
			$this->assign('btn_ok_text','完成修改');
			$this->assign('btn_ok_act','update');
		}else{
			$this->assign('btn_ok_act','add');
			$this->assign('tid',$tid);
			$this->assign('btn_ok_text','添加笔记');
		}
		$this->display();
	}
	
	/**
     * @函数	add
     * @功能	笔记添加完成，写入数据库
     */
	function add(){
		header("Content-Type:text/html; charset=utf-8");
	
		$article=D('Article');
		$username = session('username');
		if($article->create()){
			$tid=$_POST['tid'];
			$article->author = $username;
			$article->message	 = $_POST['editorValue'];
			$article->conclusion = $_POST['conclusion'];
			$article->tid = $tid;
			$article->adress = $_POST['address'];
			$article->lastmodifytime = time();
			$article->createtime = time();

			//将笔记写入数据库
			if($article->add()){

				redirect("../Title/index/id/".$tid);
			}else{
				$this->error('笔记添加失败，返回上级页面');
			}

		}else{
			$this->error($article->getError());
		}
	}

	/**
     * @函数	delete
     * @功能	删除笔记
     */
	function delete(){
    	$article=M('article');
		if($article->delete($_GET['id'])){
			$this->success('笔记删除成功');
		}else{
			$this->error($article->getLastSql());
		}
	}

	/**
     * @函数	edit
     * @功能	删除笔记
     */
	function edit(){
		header("Content-Type:text/html; charset=utf-8");
		if($_GET['id']){
			redirect(U('/Article/index/id/'.$_GET['id']),0, '编辑笔记');
		}
	}
	/**
     * @函数	quit
     * @功能	登出账户，跳转至登录页面。并清除Session
     */
	function quit(){
    	session(null);//清空所有session信息
		redirect(U('/Login/index'),0, '重新登录');
    }

	/**
     * @函数	update
     * @功能	更新修改后的笔记到数据库
     */
	public function update(){
		header("Content-Type:text/html; charset=utf-8");
		$article = M('article');
		$data = array('subject'=>$_POST['subject'],'message'=>$_POST['editorValue'],'conclusion'=>$_POST['conclusion'],'lastmodifytime'=>time());		
		$id=$_POST['id'];
		$article->where('id='.$id)->setField($data); // 根据条件保存修改的数据
		$one = $article ->where('id='.$id)->find();
		redirect("../Title/index/id/".$one['tid']);
	}
}

?>
