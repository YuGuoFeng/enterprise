<?php

namespace app\html\controller;

use app\common\model\BannerList as alm;
use think\DB;
class Company extends BackController
{


    public function index($id)
    {
        
        $list = collection(DB::name('category')
        ->where(['status'=>'normal'])
        ->where('pid',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->select())->toArray();
        
        // 合作伙伴 partners_list
        $partners_list = DB::name('partners_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->field('id,title,image')
        ->order('weigh aes')
        ->select();
        // 企业文化 culture
        $culture = DB::name('company_culture')
        ->where(['status'=>0,'language'=>$this->auth])
        ->field('id,title,description,content')
        ->select();
        $this->assign('list',$list);
        $this->assign('partners_list',$partners_list);
        $this->assign('culture',$culture);

        return $this->view->fetch();
    }


    public function projectList(){

        $project_list = DB::name('project_type')
        ->where(['status'=>0])
        ->order('weigh aes')
        ->field('id,pid,name,en_name')
        ->select();
        $level_one = [];
        $level_two = [];
        foreach($project_list as $v){
            if($v['pid'] == 0){
                $level_one[] = $v;  
            }else{
                $level_two[] = $v;  
            }
        }

        $e_project_list = DB::name('project_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,title,image,second_id')
        ->select();
        $pr_list =[];
        foreach($e_project_list as $v){
            $pr_list[$v['second_id']][] = $v;
        }

        dump($pr_list);
        $this->assign('level_one',$level_one);
        $this->assign('level_two',$level_two);
        $this->assign('pr_list',$pr_list);
        return $this->view->fetch();
    }

   

}
