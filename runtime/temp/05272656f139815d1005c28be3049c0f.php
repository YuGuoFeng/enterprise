<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:71:"/var/www/enterprise/public/../application/html/view/join/join_list.html";i:1637769662;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637851083;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637678989;s:58:"/var/www/enterprise/application/html/view/common/foot.html";i:1637769978;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637682202;}*/ ?>
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
            <a href="###" class="head-contact">联系我们</a>

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
            <div class="page-column__title">
                <div class="etitle fs36"><?php echo isset($category['en_name'])?$category['en_name']:''; ?></div>
                
                <?php if($language == 'cn'): ?>
                <i class="line"></i>
                    <div class="ctitle fs24"><?php echo isset($category['name'])?$category['name']:''; ?></div>
                <?php endif; ?>
            </div>

            <div class="page-join__topCont mt-60">
                <div class="pjt-pic item-row wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <img class="lazyload" src="<?php echo isset($category['image'])?$category['image']:''; ?>" data-original="<?php echo isset($category['image'])?$category['image']:''; ?>">
                </div>
                <div class="pjt-inner item-row wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <?php if($language == 'cn'): ?>
                        <?php echo isset($category['content'])?$category['content']:''; else: ?>
                        <?php echo isset($category['en_content'])?$category['en_content']:''; endif; ?>

                </div>
            </div>

            <div class="page-join__list mt-150">
                <ul>
                    <?php foreach($jobs_list as $v): ?>
                        <li class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="item-box">
                                <div class="item-title"><?php echo isset($v['title'])?$v['title']:''; ?></div>
                                <div class="item-info">
                                    <div class="item-site">
                                        <?php echo isset($v['address'])?$v['address']:''; ?>
                                        <div class="item-sym"></div>
                                    </div>
                                    <div class="item-slide" style="display: none;">
                                        <div class="item-cont">
                                            <div class="item-inner">
                                                <div class="item-intro">岗位职责：</div>
                                                <div class="item-text">
                                                    <?php echo isset($v['responsibility'])?$v['responsibility']:''; ?>
                                                </div>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-intro">任职要求：</div>
                                                <div class="item-text">
                                                    <?php echo isset($v['job_specification'])?$v['job_specification']:''; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    
                </ul>
            </div>

            <div class="page-join__explain mt-150">
                <?php foreach($category_bottom as $key=>$v): ?>    
                    <div class="<?php echo $key==0?'pe-offer':'pe-understand'; ?> wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <!--  -->
                        <?php if($language == 'cn'): ?>
                            <div class="pe-title">
                                <?php echo isset($v['name'])?$v['name']:''; ?>
                            </div>
                            <div class="pe-text">
                                <?php echo isset($v['content'])?$v['content']:''; ?>
                            </div>
                            <?php else: ?>
                                <div class="pe-title">
                                    <?php echo isset($v['en_name'])?$v['en_name']:''; ?>
                                </div>
                                <div class="pe-text">
                                    <?php echo isset($v['en_content'])?$v['en_content']:''; ?>
                                </div>
                            <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
          
                <div class="pe-code wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <?php foreach($code_bottom as $v): ?>    
                    <div class="item-box">
                        <div class="item-pic">
                            <img class="lazyload" src="<?php echo isset($v['image'])?$v['image']:''; ?>" data-original="<?php echo isset($v['image'])?$v['image']:''; ?>">
                        </div>
                        <div class="item-txt1 item-txt">
                            <?php if($language == 'cn'): ?>
                                <?php echo isset($v['content'])?$v['content']:''; else: ?>
                                <?php echo isset($v['en_content'])?$v['en_content']:''; endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="mt-120"></div>
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