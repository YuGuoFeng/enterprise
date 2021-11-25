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
    // AWARDS  奖项荣誉
    Route::get('/awards/list/:id','html/company/awardsList');
    // PUBLICATION 期刊发表
    Route::get('/publication/list/:id','html/company/publicationList');
    // 产品列表
    Route::get('/product/list/:id','html/company/productList');
    // 公司动态
    Route::get('/news/list/:id','html/company/newsList');
    // 公司动态详情
    Route::get('/news/show/:id','html/company/newsShow');
    // JOIN US  招聘信息
    Route::get('/join/list/:id','html/join/joinList');
    // 联系我们
    Route::get('/contact/:id','html/join/contact');
    // e_search
    Route::get('/search','html/join/search');


});

Route::group('en',function(){
    // 首页
    Route::get('/index','html/index/index');

    // COMPANY  品牌介绍
    Route::get('/company/list/:id','html/company/index');
    // PROJECT 室内设计

    Route::get('/project/list','html/company/projectList');
    // AWARDS  奖项荣誉
    Route::get('/awards/list/:id','html/company/awardsList');
    // PUBLICATION 期刊发表
    Route::get('/publication/list/:id','html/company/publicationList');
    // 产品列表
    Route::get('/product/list/:id','html/company/productList');
    // 公司动态
    Route::get('/news/list/:id','html/company/newsList');
    // 公司动态详情
    Route::get('/news/show/:id','html/company/newsShow');
    // JOIN US  招聘信息
    Route::get('/join/list/:id','html/join/joinList');
    // 联系我们
    Route::get('/contact/:id','html/join/contact');


});