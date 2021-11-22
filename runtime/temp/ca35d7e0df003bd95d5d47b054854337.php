<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"/var/www/enterprise/public/../application/html/view/company/index.html";i:1637501557;s:58:"/var/www/enterprise/application/html/view/common/head.html";i:1637495485;s:57:"/var/www/enterprise/application/html/view/common/nav.html";i:1637502489;s:60:"/var/www/enterprise/application/html/view/common/script.html";i:1637495808;}*/ ?>
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
                                    <a href="###"><?php echo $co['name']; ?></a>
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
                <div class="etitle fs36">COMPANY</div>
                <i class="line"></i>
                <div class="ctitle fs24">品牌介绍</div>
            </div>


            <div class="company-intro__full mt-30">
                <div class="item-cont">
                    <div class="item-small__pic item-pic wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <img class="lazyload" src="/assets/img/images/grey.gif" data-original="/assets/img/images/COMPANY-001.jpg" alt="">
                    </div>
                    <div class="item-text sec-txt wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <p><br>
                            <strong>LSD Interior Design</strong></p>

                        <p><br> 以设计师葛亚曦先生为首的先锋设计师团体，
                        </p>

                        <p>于深圳、上海，双中心运营发展设计。</p>

                        <p>主营业务聚焦地产行业的室内空间的整体解决方案业务，</p>

                        <p>19年业务延展至商业空间、酒店设计、高定私宅。</p>

                        <p>十四年来，引领中国设计的前沿视角，不断打造经典设计作品，</p>

                        <p>屡获国内外设计⼤奖，如加拿⼤AZ、德国红点产品设计、法国DNA、</p>

                        <p>英国安德⻢丁、美国建筑⼤师设计、DFA亚洲最具影响⼒等。</p>

                        <p>持续引领⾼端居住审美，推动⻛格迭代，</p>

                        <p>成为中国室内设计标杆企业。</p>

                        <p>&nbsp;</p>

                    </div>
                </div>

                <div class="item-larze__pic item-pic wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="lazyload" src="/assets/img/images/COMPANY-001.jpg" data-original="/assets/img/images/COMPANY-001.jpg">
                </div>
            </div>

            <div class="company-founder__full mt-100">
                <div class="item-pic wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="lazyload" src="/assets/img/images/FOUNDER-001.jpg" data-original="/assets/img/images/FOUNDER-001.jpg">
                </div>
                <div class="item-cont wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="page-column__title">
                        <div class="etitle fs36">FOUNDER</div>
                        <i class="line"></i>
                        <div class="ctitle fs24">创始人介绍</div>
                    </div>
                    <div class="item-caption fs24 mt-60">葛亚曦</div>
                    <div class="item-text sec-txt mt-30">
                        <p>LSD&amp;再造 创始人兼艺术总监</p>

                        <p>深圳室内设计协会轮值会长</p>

                        <p>深圳室内建筑设计行业协会副会长</p>

                        <p>清华大学软装与陈列设计高级研修班客座教授</p>

                        <p>同济大学室内设计与软装高级研修班客座教授</p>

                    </div>
                </div>
            </div>

            <div class="company-culture__full mt-150">
                <div class="page-column__title">
                    <div class="etitle fs36">COMPANY CULTURE</div>
                    <i class="line"></i>
                    <div class="ctitle fs24">企业文化</div>
                </div>
                <div class="company-culture__list mt-80">
                    <ul class="list list-2">
                        <li class="wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="item-box">
                                <div class="item-hint fs24">愿景</div>
                                <div class="item-caption sec-txt">
                                    我们事业存在的价值？
                                </div>
                                <div class="item-txt sec-txt">
                                    <p>成为引领中国人居审美和改变未来人们生活方式的具有全球影响力的企业</p>

                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="item-box">
                                <div class="item-hint fs24">使命</div>
                                <div class="item-caption sec-txt">
                                    我们要去哪里，达到什么目标？
                                </div>
                                <div class="item-txt sec-txt">
                                    <p>用设计引领中国人居审美</p>

                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="item-box">
                                <div class="item-hint fs24">文化 丨 价值观</div>
                                <div class="item-caption sec-txt">
                                    我们信奉什么？
                                </div>
                                <div class="item-txt sec-txt">
                                    <p>客户为中心创造价值<br> 坚持绝对的坦诚
                                        <br> 永远都有更好的解决方案
                                        <br> 共担共享 信仰奋斗<br> 彼此独立但共同成长
                                        <br> 用责任赢得信任，用自律换取自由
                                    </p>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="company-partner__full mt-60">
                <div class="page-column__title">
                    <div class="etitle fs36">PARTNER</div>
                    <i class="line"></i>
                    <div class="ctitle fs24">合作伙伴</div>
                </div>

                <div class="company-partner__list mt-60">
                    <ul>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-1xx.jpg" data-original="/assets/img/images/partners-1xx.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-2x.jpg" data-original="/assets/img/images/partners-2x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-3x.jpg" data-original="/assets/img/images/partners-3x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-4x.jpg" data-original="/assets/img/images/partners-4x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-5x.jpg" data-original="/assets/img/images/partners-5x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-6x.jpg" data-original="/assets/img/images/partners-6x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-7x.jpg" data-original="/assets/img/images/partners-7x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-8x.jpg" data-original="/assets/img/images/partners-8x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-9x.jpg" data-original="/assets/img/images/partners-9x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-10x.jpg" data-original="/assets/img/images/partners-10x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-11x.jpg" data-original="/assets/img/images/partners-11x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-12x.jpg" data-original="/assets/img/images/partners-12x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-13X.jpg" data-original="/assets/img/images/partners-13X.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-14x.jpg" data-original="/assets/img/images/partners-14x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-15x.jpg" data-original="/assets/img/images/partners-15x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-16x.jpg" data-original="/assets/img/images/partners-16x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-17x.jpg" data-original="/assets/img/images/partners-17x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-18x.jpg" data-original="/assets/img/images/partners-18x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-19x.jpg" data-original="/assets/img/images/partners-19x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-20x.jpg" data-original="/assets/img/images/partners-20x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-21x.jpg" data-original="/assets/img/images/partners-21x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-22x.jpg" data-original="/assets/img/images/partners-22x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-23x.jpg" data-original="/assets/img/images/partners-23x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-24x.jpg" data-original="/assets/img/images/partners-24x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-25x.jpg" data-original="/assets/img/images/partners-25x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-26x.jpg" data-original="/assets/img/images/partners-26x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-27x.jpg" data-original="/assets/img/images/partners-27x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-28x.jpg" data-original="/assets/img/images/partners-28x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-29x.jpg" data-original="/assets/img/images/partners-29x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-30x.jpg" data-original="/assets/img/images/partners-30x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-31x.jpg" data-original="/assets/img/images/partners-31x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-32x.jpg" data-original="/assets/img/images/partners-32x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-33x.jpg" data-original="/assets/img/images/partners-33x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-34x.jpg" data-original="/assets/img/images/partners-34x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-35xx.jpg" data-original="/assets/img/images/partners-35xx.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-36x.jpg" data-original="/assets/img/images/partners-36x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-37x.jpg" data-original="/assets/img/images/partners-37x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-38x.jpg" data-original="/assets/img/images/partners-38x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-39x.jpg" data-original="/assets/img/images/partners-39x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-40x.jpg" data-original="/assets/img/images/partners-40x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-41x.jpg" data-original="/assets/img/images/partners-41x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-42x.jpg" data-original="/assets/img/images/partners-42x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-43x.jpg" data-original="/assets/img/images/partners-43x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-44x.jpg" data-original="/assets/img/images/partners-44x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-45x.jpg" data-original="/assets/img/images/partners-45x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-46x.jpg" data-original="/assets/img/images/partners-46x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-47x.jpg" data-original="/assets/img/images/partners-47x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-48x.jpg" data-original="/assets/img/images/partners-48x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-49x.jpg" data-original="/assets/img/images/partners-49x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-50x.jpg" data-original="/assets/img/images/partners-50x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-51x.jpg" data-original="/assets/img/images/partners-51x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-52x.jpg" data-original="/assets/img/images/partners-52x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-53x.jpg" data-original="/assets/img/images/partners-53x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-54x.jpg" data-original="/assets/img/images/partners-54x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-55x.jpg" data-original="/assets/img/images/partners-55x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-56x.jpg" data-original="/assets/img/images/partners-56x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-57x.jpg" data-original="/assets/img/images/partners-57x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-58x.jpg" data-original="/assets/img/images/partners-58x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-59x.jpg" data-original="/assets/img/images/partners-59x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-60x.jpg" data-original="/assets/img/images/partners-60x.jpg">
                            </div>
                        </li>
                        <li>
                            <div class="item-pic">
                                <img class="lazyload" src="/assets/img/images/partners-61x.jpg" data-original="/assets/img/images/partners-61x.jpg">
                            </div>
                        </li>
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
    <script src="/assets/js/js/main.js"></script>
        <script src="/assets/js/js/swiper.min.js"></script>
        <script src="/assets/js/js/wow.min.js"></script>
       
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