<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"/var/www/enterprise/public/../application/html/view/company/publication_list.html";i:1637684723;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637495485;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637678989;s:58:"/var/www/enterprise/application/html/view/common/foot.html";i:1637594279;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637682202;}*/ ?>
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
    <title>LSD-再造集团-中国知名室内设计师葛亚曦</title>
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
            <a href="###" class="head-contact">联系我们</a>

            <div class="head-logo__full">
                <a href="###" class="logo">
                    <img src="/assets/img/images/logo.svg" alt="">
                </a>
            </div>

            <div class="head-handle">
                <div class="head-lang">
                    <a href="###">EN</a>
                    <a href="javascript:;" class="on">CN</a>
                </div>


                <div class="head-search">
                    <div class="head-search__box">
                        <form action="" method="get">
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
        <div class="wrap">
            <div class="container w1140">
                <div class="page-book__full mt-80">
                    <div class="page-column__title">
                        <div class="etitle fs36"><?php echo isset($category['en_name'])?$category['en_name']:''; ?></div>
                        <i class="line"></i>
                        <?php if($language == 'cn'): ?>
                            <div class="ctitle fs24"><?php echo isset($category['name'])?$category['name']:''; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="page-book__list mt-60">
                        <ul class="list list-4">
                            <?php foreach($publication_list as $k=>$v): ?>
                            <li>
                                <a class="item-btn" href="javascript:;">
                                    <div class="item-pic">
                                        <img class="lazyload" src="<?php echo $v['image']; ?>" data-original="<?php echo $v['image']; ?>" alt="" style="">
                                    </div>
                                    <div class="item-name"><?php echo $v['title']; ?></div>
                                </a>
                                <div class="item-html">
                                    <?php foreach($v['image_arr'] as $k=>$vo): ?>
                                    <a class="book-fancybox" rel="group" data-fancybox="gallery2" href="<?php echo $vo['image']; ?>"></a>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            

                        </ul>
                    </div>

                    <div class="list-paging d-none ajax-page">

                    </div>

                    <div class="list-loading">
                        <i></i><i></i><i></i><i></i>
                    </div>

                    <div class="mt-100"></div>
                </div>

            </div>
            <!-- START 底部开始 -->
            

<footer>
    <div class="footer">
        <div class="footer-main">
            <div class="copyright">
                <a href="https://beian.miit.gov.cn/" target="_blank">
                        ©2021再造 粤ICP备18001316号-1 Designed By ZAIZAO
                    </a>
            </div>
        </div>
    </div>
</footer>

<div class="foot-fix"></div>
<div class="foot-place"></div>
            <!-- END 底部结束 -->
        </div>

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