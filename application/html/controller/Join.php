<?php

namespace app\html\controller;

use app\common\model\BannerList as alm;
use think\DB;
class Join extends BackController
{


    public function joinList($id){
        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();
        // e_publication_list
        $jobs_list = DB::name('jobs_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,title,address,responsibility,job_specification')
        ->select();


        $category_bottom = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('pid',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,content,en_content')
        ->select();

        $code_bottom = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id','in',[31,32])
        ->order('weigh aes')
        ->field('id,pid,name,en_name,content,en_content,image')
        ->select();

        $this->assign('category',$category);
        $this->assign('jobs_list',$jobs_list);
        $this->assign('category_bottom',$category_bottom);
        $this->assign('code_bottom',$code_bottom);
        return $this->view->fetch();
    }


    public function contact($id){

        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();
       


        $code_bottom = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id','in',[31,32])
        ->order('weigh aes')
        ->field('id,pid,name,en_name,content,en_content,image')
        ->select();

        $this->assign('category',$category);
        $this->assign('code_bottom',$code_bottom);
        return $this->view->fetch();
    }
}
