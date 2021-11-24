<?php

namespace app\html\controller;
use think\Controller;
use app\common\model\Category as cm;
use think\DB;
use think\Request;
use think\Config;
class BackController extends Controller
{   

    protected $auth = 'cn';

    public function _initialize(){
        $site = Config::get("site");
        $request = Request::instance();
        $path = $request->path();

        $auth = explode('/',$path);
        $this->auth = $auth[0]??'cn';
        $nav = collection(DB::name('category')->where(['status'=>'normal','nav'=>1])->order('weigh aes')->field('id,pid,name,en_name,url')->select())->toArray();
        $nav_list = $this->getTree($nav,0);
        $this->assign('nav_list',$nav_list);
        $this->assign('site',$site);
        $this->assign('language',$this->auth);


    }

    public function getTree($list,$pid){
        $tree = array();
        foreach($list as $k => $v){
            if($v['pid'] == $pid){
                $v['child'] = $this->getTree($list,$v['id']);
                $tree[]= $v;
            }
        }

        return $tree;
    }

}
