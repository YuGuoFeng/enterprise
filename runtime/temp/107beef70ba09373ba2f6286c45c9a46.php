<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:76:"/var/www/enterprise/public/../application/html/view/company/awards_list.html";i:1637769595;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637851083;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637678989;s:58:"/var/www/enterprise/application/html/view/common/foot.html";i:1637769978;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637682202;}*/ ?>
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
        <div class="container w1140">
            <div class="company-honor__full mt-150">
                <div class="page-column__title">
                    <div class="etitle fs36"><?php echo isset($category['en_name'])?$category['en_name']:''; ?></div>
                    
                    <?php if($language == 'cn'): ?>
                        <i class="line"></i>
                        <div class="ctitle fs24"><?php echo isset($category['name'])?$category['name']:''; ?></div>
                    <?php endif; ?>
                    
                </div>

                <div class="c-honor__date mt-50">
                    <div class="c-honor__dateSlick slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 400px; transform: translate3d(0px, 0px, 0px);">
                                
                                <?php foreach($awards_type as $k=>$v): ?>
                                <div id="onclick_qh" index-data="<?php echo $v['id']; ?>" class="onclick_qh slick-slide slick-active <?php echo $k==0?'slick-current':''; ?>" data-slick-index="0" aria-hidden="false" style="width: 80px;">
                                    <div>
                                        <div class="item-box" style="width: 100%; display: inline-block;">
                                            <a href="javascript:;" tabindex="0" >
                                                <div class="item-year">
                                                    <?php if($language == 'cn'): ?>
                                                        <?php echo $v['name']; else: ?>
                                                        <?php echo $v['en_name']; endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
 
                            </div>
                        </div>
                    </div>

                    <div class="c-honor__arrow company-column__arrow" style="display: none;">
                        <a href="javascript:;" class="c-honor__prev c-prev__btn icon-arrleft"></a>
                        <a href="javascript:;" class="c-honor__next c-next__btn icon-arrright"></a>
                    </div>
                </div>
                <div class="c-honor__list">
                    <?php foreach($awards_list as $key=>$vo): ?>
                        <div class="item-rows gfy_child" id="gfy_list_<?php echo $key; ?>" style="display: none;">
                            <ul>
                                <?php foreach($vo as $k=>$v): ?>
                                <li>
                                    <div class="item-inner wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <h5><?php echo $v['title']; ?></h5>
                                        <p><?php echo $v['address']; ?></p>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                            
                    <?php endforeach; ?>
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

        var init_id = $('.slick-current').attr('index-data');
        $('#gfy_list_'+init_id).show();
        $(".onclick_qh").click(function(){
            $('.onclick_qh').each(function(i,n){
                $('.onclick_qh').eq(i).removeClass('slick-current');
                var id = $('.onclick_qh').eq(i).attr('index-data');
                $('#gfy_list_'+id).hide();
            })
            var index_data = $(this).attr('index-data');
            $(this).addClass('slick-current');
            $('#gfy_list_'+index_data).show();
            // gfy-child
         

        })

    </script>

</body>

</html>