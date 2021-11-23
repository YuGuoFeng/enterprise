<?php

namespace app\html\controller;

use app\common\model\BannerList as alm;
class Index extends BackController
{


    public function index()
    {
        $banner_list = (new alm)->where(['status'=>0])->order('weigh ase')->field('id,title,en_title,image,url')->select();
        $this->assign('banner_list',$banner_list);
        return $this->view->fetch();
    }

   
    
}
