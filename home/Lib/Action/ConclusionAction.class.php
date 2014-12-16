<?php
/**
     * @类   IndexAction
     * @功能  前端首页控制器
*/
class ConclusionAction extends Action {  
  /**
     * @函数  index
     * @功能  显示前端主页面（包含登录判断）
     */
    public function index(){  
        header("Content-Type:text/html; charset=utf-8");

    if(session('?username')){
      $this->assign('username',session('username'));
$tid=$_GET['tid'];
    
      //实例化文章模型
            $username = session('username');
      $allnews=M('article');
            $news=$allnews->where("author='".$username."'");
      $count=$news->count();
    
      //分页显示文章列表，每页8篇笔记
      import('ORG.Util.Page');
      $page=new Page($count,8);//页面默认一页显示8条笔记记录
  
            $page->setConfig('prev', "&laquo; Previous");//上一页
            $page->setConfig('next', 'Next &raquo;');//下一页
            $page->setConfig('first', '&laquo; First');//第一页
            $page->setConfig('last', 'Last &raquo;');//最后一页 
      $page->setConfig('theme',' %first% %upPage%  %linkPage%  %downPage% %end%');
            //设置分页回调方法
      $show=$page->show();
      $news_list=$allnews->where("tid='".$tid."'")->field(array('id','subject','createtime','conclusion'))->order('createtime desc')->limit($page->firstRow.','.$page->listRows)->select();
      
      //对原始信息过滤
         // $this->filter($news_list);
      
      $this->assign('news_count',$count);
      $this->assign('title','师生讨论笔记');
      $this->assign('news_list',$news_list);
      $this->assign('page_method',$show);
            
      $this->display();
      
    }
    
    else
    {
      $this->error('您好，请先登录！！！',U('/Login/index/'));
    } 
    }
    
    /**
     * @函数  quit
     * @功能  登出账户，跳转至登录页面。并清除Session
     */
    function quit(){
      session(null);//清空所有session信息
    redirect(U('/Login/index'),0, '重新登录');
    }
    
  /**
     * @函数  article
     * @功能  编辑新的文章
     */
    function article(){
      //跳转到Article控制器的index方法
      redirect(U('/Article/index'),0, '新建笔记');
    } 
    /**
     * @函数  delete
     * @功能  删除文章
     */
    function delete(){
      
      //跳转至Article控制器来实现
      if($_GET['id']){
        redirect(U('/Article/delete/id/'.$_GET['id']),0, '删除笔记');
      }
      else{
        $this->error('参数错误！');
      }
    }
    
    /**
     * @函数  edit
     * @功能  编辑文章
     */
    function edit(){
      if($_GET['id']){
        redirect(U('/Article/edit/id/'.$_GET['id']),0, '编辑笔记');
      }
      else{
        $this->error('参数错误！');
      }
    } 
    
}

