<?php

namespace app\html\controller;

use app\common\model\BannerList as alm;
use think\DB;
class Company extends BackController
{


    public function index($id)
    {
       /*  $banner_list = (new alm)->where(['status'=>0])->order('weigh ase')->field('id,title,en_title,image,url')->select();
        $this->assign('banner_list',$banner_list); */
        
        $list = DB::name('category')
        ->where(['status'=>'normal'])
        ->where('pid',$id)
        ->order('weigh aes')
        ->field('id,pid,name,en_name,url,list_type')
        ->select();
        
        

        return $this->view->fetch();
    }

   

}
