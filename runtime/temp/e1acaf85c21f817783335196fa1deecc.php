<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:77:"/var/www/enterprise/public/../application/html/view/company/project_list.html";i:1637678636;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637853865;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637678989;s:58:"/var/www/enterprise/application/html/view/common/foot.html";i:1637769978;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637682202;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn" class=" cssanimations">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="sumaart.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="format-detection" content="telephone=no,email=no,adress=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php echo $site['name']; ?></title>
    <link rel="icon" href="http://www.lsdcasa.com/favicon.ico">
    <link rel="stylesheet" href="/assets/css/css/font_2497474_klbmmwvgivf.css">
    <link rel="stylesheet" href="/assets/css/css/app.css">
    <link rel="stylesheet" href="/assets/css/css/lay.css">
    <link rel="stylesheet" href="/assets/css/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/css/style.css">
    <link rel="stylesheet" href="/assets/css/css/animate.css">


</head>

<body class="home in-ready">

    <!-- STAET 头部开始 -->
  <header>

    <div class="header">
        <div class="header-main">
            <a href="/<?php echo $language; ?>/contact/21" class="head-contact">联系我们</a>

            <div class="head-logo__full">
                <a href="###" class="logo">
                    <img src="/assets/img/images/logo.svg" alt="">
                </a>
            </div>

            <div class="head-handle">
                <div class="head-lang">
                    <a href="/en/index"  class="<?php echo $language=='en'?'on':''; ?>">EN</a>
                    <a href="/cn/index" class="<?php echo $language=='cn'?'on':''; ?>">CN</a>
                </div>


                <div class="head-search">
                    <div class="head-search__box">
                        <form action="/<?php echo $language; ?>/search" method="get">
                            <button type="button" class="hs-btn icon-search"></button>
                            <input class="hs-input" name="keywords" type="text" autocomplete="off" placeholder="搜索...">
                        </form>
                    </div>
                </div>

                <a href="javascript:;" class="m-menu">
                    <i></i><i></i><i></i>
                </a>
            </div>
        </div>
    </div>
</header>


<!-- 栏目导航 -->
<div class="head-nav__wrap">
    <div class="head-left__area">
        <a href="javascript:;" class="menu-btn">
            <i></i><i></i><i></i>
        </a>
    </div>

    <div class="head-navs">
        <ul class="head-menu">
            <?php foreach($nav_list as $vo): if(empty($vo['child'])): ?>
                    <li class="menu-item ">
                        <a href="/<?php echo $language; ?>/<?php echo $vo['url']; ?>/<?php echo $vo['id']; ?>">
                            <span class="hm-en fs24"><?php echo $vo['en_name']; ?></span>
                            <?php if($language == 'cn'): ?>
                                <span class="hm-cn fs20"><?php echo $vo['name']; ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="menu-item ">
                        <a href="javascript:;">
                            <span class="hm-en fs24"><?php echo $vo['en_name']; ?></span>
                            <?php if($language == 'cn'): ?>
                                <span class="hm-cn fs20"><?php echo $vo['name']; ?></span>
                            <?php endif; ?>
                        </a>
                        <div class="head-subnav">
                            <ul>
                                <?php foreach($vo['child'] as $co): ?>
                                <li>
                                    <a href="/<?php echo $language; ?>/<?php echo $co['url']; ?>/<?php echo $co['id']; ?>"><?php echo $co['name']; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                <?php endif; endforeach; ?>
        </ul>
    </div>
</div>

<div class="head-show__pic bg-cover">
</div>

<div class="head-place"></div>
<!-- END 头部结束 -->
    <!-- END 头部结束 -->
    <div class="wrap">
        <div class="container w1140 mt-70">
            <div class="project-content">
                <div class="project-filtrate">

                    <div class="item-filtrate pro-filtrate__item1">
                        <ul>

                            <?php foreach($level_one as $k=>$v): ?>
                                <li class="<?php echo $k==0?'on':''; ?>">
                                    <a href="javascript:;" data-id="proFiltrate<?php echo $v['id']; ?>">
                                        <?php if($language == 'cn'): ?>
                                            <?php echo $v['name']; else: ?>
                                            <?php echo $v['en_name']; endif; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                         
                        </ul>
                    </div>
                    <div class="item-filtrate pro-filtrate__item2">
                        <?php foreach($level_two as $ks=>$v): ?>
                        <div class="item-fil__list2" id="proFiltrate<?php echo $v['pid']; ?>" style="">
                            <ul>
                                <li class="<?php echo $ks==0?'on':''; ?>">
                                    <a href="javascript:;">
                                        <?php if($language == 'cn'): ?>
                                            <?php echo $v['name']; else: ?>
                                            <?php echo $v['en_name']; endif; ?>

                                        <?php echo $v['id']; ?>
                                        <i class="icon-ra"></i>
                                    </a>
                                    <div class="item-hidden__html">
                                        <ul>
                                            <?php foreach($pr_list[$v['id']]??[] as $kss=>$vo): ?>
                                            <li class="<?php echo $kss==0?'on':''; ?>">
                                                <a href="javascript:;" data-url="/project/179.html">
                                                    <div class="item-pic">
                                                        <img class="lazyload" src="<?php echo $vo['image']; ?>" data-original="<?php echo $vo['image']; ?>" alt="">
                                                    </div>
                                                    <div class="item-title"><?php echo $vo['title']; ?></div>
                                                </a>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php endforeach; ?>
                     
                    </div>

                    <div class="item-filtrate pro-filtrate__item3">
                        <ul>
                            <?php foreach($pr_one_list as $kss=>$vo): ?>
                                <li class="on">
                                    <a href="javascript:;" data-url="/project/34.html">
                                        <div class="item-pic">
                                            <img class="lazyload" src="<?php echo isset($vo['image'])?$vo['image']:''; ?>" data-original="<?php echo isset($vo['image'])?$vo['image']:''; ?>" alt="">
                                        </div>
                                        <div class="item-title"><?php echo isset($vo['title'])?$vo['title']:''; ?></div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="oriented-right__arrow">
                    <i class="icon-ra"></i><i class="icon-ra"></i>
                </div>

                <div class="project-fancybook"></div>

                <div class="project-show__bgPic">
                    <a href="javascript:;" data-url="/project/34.html">
                        <img class="lazyload" src="<?php echo isset($pr_one_list['0']['image'])?$pr_one_list['0']['image']:''; ?>" data-original="<?php echo isset($pr_one_list['0']['image'])?$pr_one_list['0']['image']:''; ?>" alt="" style="">
                    </a>
                </div>
            </div>
        </div>




        <!-- START 底部开始 -->
        

<footer>
    <div class="footer">
        <div class="footer-main">
            <div class="copyright">
                <a href="https://beian.miit.gov.cn/" target="_blank">
                        
                        <?php echo $site['beian']; ?>
                    </a>
            </div>
        </div>
    </div>
</footer>

<div class="foot-fix"></div>
<div class="foot-place"></div>
        <!-- END 底部结束 -->
    </div>
    <script src="/assets/js/js/main.js"></script>
        <script src="/assets/js/js/swiper.min.js"></script>
        <script src="/assets/js/js/wow.min.js"></script>
        <script src="/assets/js/js/jquery-2.2.3.min.js"></script>
       
    <script type="text/javascript">
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();
    </script>

</body>

</html>