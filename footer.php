<footer class="bg-darkest-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav navbar-nav center-nav">
                    <li class="hidden-xs hidden-sm"><a class="page-scroll"
                                                       href="<?php echo home_url('/'); ?>#ForCompanies"><small>MEDIA</small><br>メディア</a>
                    </li>
                    <li class="hidden-xs hidden-sm"><a class="page-scroll"
                                                       href="<?php echo home_url('/'); ?>#AthleteSupport"><small>Research
                                paper</small><br>研究論文</a>
                    </li>
                    <li class="hidden-xs hidden-sm"><a class="page-scroll"
                                                       href="<?php echo home_url('/'); ?>#Blog"><small>BLOG</small><br>ブログ</a>
                    </li>
                    <li class="hidden-xs hidden-sm"><a class="page-scroll"
                                                       href="<?php echo home_url('/'); ?>#CompanyOverView"><small>COMPANY
                                OVER VIEW</small><br>企業情報</a>
                    </li>
                    <li class="hidden-xs hidden-sm"><a class="page-scroll" href="http://orkagym.jp/contact/"><small>RESERVE＆CONTACT</small><br>ご予約・お問合せ</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <span class="copyright">&copy; 2015-2020 ORKA TRAINING GYM JAPAN</span>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/cbpAnimatedHeader.js"></script>
<!-- Contact Form JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/contact_me.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/agency.js"></script>
<!-- slick -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

    $('.slick01').slick({
        arrows: false,
        autoplay: true,
        /* ポイントここから～ */
        autoplaySpeed: 0,
        cssEase: 'linear',
        speed: 8000,
        /* ～ここまで */
        slidesToShow: 3,
        slidesToScroll: 1,
    });

    $('.slick02').slick({
        arrows: false,
        autoplay: true,
        /* ポイントここから～ */
        autoplaySpeed: 0,
        cssEase: 'linear',
        speed: 8000,
        /* ～ここまで */
        slidesToShow: 3,
        slidesToScroll: 1,
    });

</script>
</body>

</html>
