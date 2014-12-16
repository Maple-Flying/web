 <?php
/**
     * @类		IndexAction
     * @功能	前端首页控制器
*/
class IndexAction extends Action {
	/**
     * @函数	index
     * @功能	显示前端主页面（包含登录判断）
     */
    public function index(){
        header("Content-Type:text/html; charset=utf-8");

		if(session('?username')){
			$this->assign('username',session('username'));
            $username = session('username');
            $group = M('group');
            $all = $group->where("member='".$username."'")->select();
			$allnews=M('title');

			//分页显示笔记列表，每页8篇笔记
			import('ORG.Util.Page');
			$page=new Page($count,8);//页面默认一页显示8条笔记记录

            $page->setConfig('prev', "&laquo; Previous");//上一页
            $page->setConfig('next', 'Next &raquo;');//下一页
            $page->setConfig('first', '&laquo; First');//第一页
            $page->setConfig('last', 'Last &raquo;');//最后一页	
			$page->setConfig('theme',' %first% %upPage%  %linkPage%  %downPage% %end%');
            //设置分页回调方法
			$show=$page->show();
            $i=0;
            foreach ($all as $value) {

                $news_list[$i] = $allnews->where("title='".$value["title"]."'")->field(array('id','title','author','createtime'))->order('id desc')->limit($page->firstRow.','.$page->listRows)->find();
                $i = $i + 1;
            }
			$this->assign('news_list',$news_list);
			$this->assign('page_method',$show);
			$this->display();

		}
		else
		{
            redirect(U('/Login/index'),0, '您好，请先登录');
			//$this->error('您好，请先登录！！！',U('/Login/index/'));
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
     * @函数	article
     * @功能	编辑新的笔记
     */

    /**
     * @函数	delete
     * @功能	删除笔记
     */
    function delete(){
    	//跳转至Article控制器来实现
        $theme=M('title');
        $group=M('group');
        $allarticle=M('article');
        $allarticle->where("tid='".$_GET['id']."'")->delete();
        $title = $theme->where("id='".$_GET['id']."'")->find();
        //$tid = $group->where("title='".$title['title']."'")->select();
        $group->where("title='".$title['title']."'")->delete(); 
        if($theme->delete($_GET['id'])){
            $this->success('主题删除成功');
        }else{
            $this->error($theme->getLastSql());
        }
    }
    function update(){
        header("Content-Type:text/html; charset=utf-8");
        $title = M('title');
        $data = array('title'=>$_POST['title']);
        $id=$_POST['id'];
        $title->where('id='.$id)->setField($data); // 根据条件保存修改的数据
        $this->success('主题更新成功',U('Index/index'));
    }
    /**
     * @函数	edit
     * @功能	编辑笔记
     */
    function edit(){
    	if($_GET['id']){
    		redirect(U('/Theme/edit/id/'.$_GET['id']),0, '编辑主题');
    	}
    	else{
    		$this->error('参数错误！');
    	}
    }
    /*
     * @函数      addnumber
     * @功能      添加成员
     */
    function addmember(){
        $group = M('group');
        $group->create();
        $group->add();
        $this->success();
    }

    function addtheme(){
        $theme = M('title');
        $group = M('group');
        if($group->create()){
            $group->title = $_POST['title'];
            $group->member = session('username');
            $group->add();
        }
        if($theme->create()){
            $theme->title = $_POST['title'];
            $theme->author  = session('username');
            $theme->createtime = time();
            $theme->add();
            $this->success();
        }
    }

}

