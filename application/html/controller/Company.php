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
        $id = $level_one[0]['id']??'';
        $one_id = DB::name('project_type')
        ->where(['status'=>0])
        ->where('pid',$id)
        ->order('weigh aes')->value('id');
        $pr_one_list = $pr_list[$one_id]??[];
        $this->assign('level_one',$level_one);
        $this->assign('level_two',$level_two);
        $this->assign('pr_list',$pr_list);
        $this->assign('pr_one_list',$pr_one_list);
        return $this->view->fetch();
    }

    public function awardsList($id){

        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();

        $awards_type = DB::name('awards_type')
        ->where(['status'=>0])
        ->order('weigh aes')
        ->field('id,name,en_name')
        ->select();


        $awardslist = DB::name('awards_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,first_id,title,address')
        ->select();

        $awards_list = [];
        foreach($awardslist as $v){
            $awards_list[$v['first_id']][] = $v;
        }
        $this->assign('awards_type',$awards_type);
        $this->assign('awards_list',$awards_list);
        $this->assign('category',$category);
        return $this->view->fetch();

    }

    public function publicationList($id){
        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();
        // e_publication_list
        $publication_list = DB::name('publication_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,image_type_id,title,image')
        ->select();
        foreach($publication_list as &$v){
            $v['image_arr'] = DB::name('image_list')
            ->where('image_type_id',$v['image_type_id'])
            ->where('status',0)
            ->field('id,image')->select();
        }
        $this->assign('category',$category);
        $this->assign('publication_list',$publication_list);
        return $this->view->fetch();
    }

    public function productList($id){
        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();
        // e_publication_list
        $product_list = DB::name('product_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,image,url')
        ->select();
        $this->assign('category',$category);
        $this->assign('product_list',$product_list);
        return $this->view->fetch();
    }
    
    public function newsList($id){
        $category = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('id',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type,content,en_content,keywords,en_keywords,image')
        ->find();
        // e_publication_list
        $news_list = DB::name('news_list')
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,title,image,entry_time')
        ->select();
        $this->assign('category',$category);
        $this->assign('news_list',$news_list);
        return $this->view->fetch();
    }

    public function newsShow($id){
       
        // e_publication_list
        $news_list = DB::name('news_list')
        ->where('id',$id)
        ->where(['status'=>0,'language'=>$this->auth])
        ->order('weigh aes')
        ->field('id,title,image,entry_time,content')
        ->find();
        $this->assign('news_list',$news_list);
        return $this->view->fetch();
        return $this->view->fetch();
    }

}
