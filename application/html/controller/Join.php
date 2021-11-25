<?php

namespace app\html\controller;

use app\common\model\BannerList as alm;
use think\DB;
use think\Request;
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


    public function search(Request $request){
        $key = $request->get('keywords');
        $search = DB::name('search')
        ->where(function($query)use($key){
            $query->whereOr('title','like','%'.$key.'%')->whereOr('content','like','%'.$key.'%');
        })
        ->where(['language'=>$this->auth])
        ->order('id desc')
        ->select();

        $layuan = [
            'awards_list' => ['name'=>'奖项荣誉','url'=>'/'.$this->auth.'/awards/list/27'],
            'publication_list' => ['name'=>'期刊发表','url'=>'/'.$this->auth.'/publication/list/28'],
            // 'product_list' => '产品',
            'news_list' => ['name'=>'公司动态','url'=>'/'.$this->auth.'/news/show'],
            'jobs_list' => ['name'=>'招聘岗位','url'=>''],
        ];

        foreach($search as &$v){
            $v['ly_name'] = $layuan[$v['tbale']]['name']??'';
            if($v['tbale'] == 'news_list'){
                $url =  $layuan[$v['tbale']]['url']??'';
                $v['url'] = !empty($url)?$url.'/'.$v['table_id']:'';
            }else{
                $v['url'] = $layuan[$v['tbale']]['url']??'';
            }
           
        }
        $num = count($search);
        $this->assign('search',$search);
        $this->assign('num',$num);
        $this->assign('key',$key);
        return $this->view->fetch();
    }
}
