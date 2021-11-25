<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:70:"/var/www/enterprise/public/../application/html/view/company/index.html";i:1637769606;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637853865;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637678989;s:58:"/var/www/enterprise/application/html/view/common/foot.html";i:1637769978;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637682202;}*/ ?>
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
            <div class="page-column__title">
                <div class="etitle fs36"><?php echo isset($list['0']['en_name'])?$list['0']['en_name']:''; ?></div>
                
                <?php if($language == 'cn'): ?>
                    <i class="line"></i>
                    <div class="ctitle fs24"><?php echo isset($list['0']['name'])?$list['0']['name']:''; ?></div>
                <?php endif; ?>
            </div>

            <div class="company-intro__full mt-30">
                <div class="item-cont">
                    <div class="item-small__pic item-pic wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img class="lazyload" src="/assets/img/images/grey.gif" data-original="/assets/img/images/COMPANY-001.jpg" alt="">
                    </div>
                    <div class="item-text sec-txt wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

                        <?php if($language == 'cn'): ?>
                            <?php echo $list['0']['content']; else: ?>
                            <?php echo $list['0']['en_content']; endif; ?>

                    </div>
                </div>

                <div class="item-larze__pic item-pic wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="lazyload" src="<?php echo isset($list['0']['image'])?$list['0']['image']:''; ?>" data-original="<?php echo isset($list['0']['image'])?$list['0']['image']:''; ?>">
                </div>
            </div>


            

            <div class="company-founder__full mt-100">
                <div class="item-pic wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="lazyload" src="<?php echo isset($list['1']['image'])?$list['1']['image']:''; ?>" data-original="<?php echo isset($list['1']['image'])?$list['1']['image']:''; ?>">
                </div>
                <div class="item-cont wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="page-column__title">
                        <div class="etitle fs36"><?php echo isset($list['1']['en_name'])?$list['1']['en_name']:''; ?></div>
                        <i class="line"></i>
                        <?php if($language == 'cn'): ?>
                            <div class="ctitle fs24"><?php echo isset($list['0']['name'])?$list['0']['name']:''; ?></div>
                        <?php endif; ?>
                    </div>
                    <?php if($language == 'cn'): ?>
                        <div class="item-caption fs24 mt-60"><?php echo isset($list['1']['keywords'])?$list['1']['keywords']:''; ?></div>
                    <?php else: ?>
                        <div class="item-caption fs24 mt-60"><?php echo isset($list['1']['en_keywords'])?$list['1']['en_keywords']:''; ?></div>
                    <?php endif; ?>
                    
                    <div class="item-text sec-txt mt-30">
                        <?php if($language == 'cn'): ?>
                            <?php echo $list['1']['content']; else: ?>
                            <?php echo $list['1']['en_content']; endif; ?>

                    </div>
                </div>
            </div>

            <div class="company-culture__full mt-150">
         
                <div class="page-column__title">
                    <div class="etitle fs36"><?php echo isset($list['2']['en_name'])?$list['2']['en_name']:''; ?></div>
                    <i class="line"></i>
                    <?php if($language == 'cn'): ?>
                        <div class="ctitle fs24"><?php echo isset($list['2']['name'])?$list['2']['name']:''; ?></div>
                    <?php endif; ?>
                </div>
                <div class="company-culture__list mt-80">
                    <ul class="list list-2">
                        <?php $num = '0.1'; foreach($culture as $k=>$v): ?>

                            <li class="wow fadeInUp" data-wow-delay="<?php echo $num+(0.2 * $k); ?>s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="item-box">
                                    <div class="item-hint fs24"><?php echo $v['title']; ?></div>
                                    <div class="item-caption sec-txt">
                                        <?php echo $v['description']; ?>
                                    </div>
                                    <div class="item-txt sec-txt">
                                        <?php echo $v['content']; ?>

                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="company-partner__full mt-60">
       
                <div class="page-column__title">
                    <div class="etitle fs36"><?php echo isset($list['3']['en_name'])?$list['3']['en_name']:''; ?></div>
                    <i class="line"></i>
                    <?php if($language == 'cn'): ?>
                        <div class="ctitle fs24"><?php echo isset($list['2']['name'])?$list['2']['name']:''; ?></div>
                    <?php endif; ?>
                </div>
                <div class="company-partner__list mt-60">
                    <ul>
                        <?php foreach($partners_list as $k=>$v): ?>
                            <li>
                                <div class="item-pic">
                                    <img class="lazyload" src="<?php echo $v['image']; ?>" data-original="<?php echo $v['image']; ?>">
                                </div>
                            </li>
                        <?php endforeach; ?>
                       
                       
                        
                    </ul>
                </div>
            </div>

            <div class="mt-80"></div>
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
       
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            spaceBetween: 30,
            loop: true,
            autoplay: 4000, //可选选项，自动滑动
        });
    </script>
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