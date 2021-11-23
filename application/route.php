<?php
use think\Route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::group('cn',function(){
    // 首页
    Route::get('/index','html/index/index');

    // COMPANY  品牌介绍
    Route::get('/company/list/:id','html/company/index');
    // PROJECT 室内设计

    Route::get('/project/list','html/company/projectList');
});