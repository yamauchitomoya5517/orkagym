        <!DOCTYPE html>
        <html lang="ja">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="ORKAGYM×医科学研究所｜運動療法を処方する医科学研究所併設トレーニングジム">
            <meta name="author" content="">
            <title>
                <?php bloginfo('name');?> |
                <?php bloginfo('description');?>
            </title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php bloginfo('template_url');?>/css/agency.css" rel="stylesheet">
            <!-- Custom Fonts -->
            <link href="<?php bloginfo('template_url');?>/font-awesome/css/font-awesome.min.css" rel="stylesheet"
            type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
            <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
            type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head();?>
    </head>

    <body id="page-top" class="index">
        <?php include_once 'analyticstracking.php';?>
        <!-- Navigation -->
        <?php get_header();?>
        <header>
            <div class="embed-responsive embed-responsive-16by9 hidden-xs">
                <div class="inner">
                    <p class="hidden-xs">ORKAGYM×医科学研究所
                        <span class="text-primary">OFFICIAL</span> WEB SITE.</p>
                        <ul class="list-inline">
                            <li>
                                <a href="tel:03-6260-9115">
                                    <i class="fa fa-phone"></i>&nbsp;03-6260-9115</a>
                                </li>
                            </ul>
                            <p class="spacer-m">
                                <a href="http://orkagym.jp/contact/" class="btn btn-xl page-scroll">Contact</a>
                            </p>
                        </div>
                        <div class="overlay"></div>
                        <video autoplay muted loop playsinline poster="<?php echo home_url('/'); ?>/img/poster.jpg"
                         class="img-responsive hidden-xs">
                         <!-- <source src="<?php bloginfo('template_url');?>/img/movie/compressed.mov"> -->
                            <source src="sample.ogv">
                                <source src="sample.webm">
                                    <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                                </video>
                            </div>
                        </header>
                        <section class="visible-xs text-center bg-darkest-gray" style="padding:150px 0";>
        <!-- <section class="visible-xs text-center bg-darkest-gray"
           style="padding:150px 0;background: url('http://orkagym.jp/wp-content/uploads/2020/05/sp_new.gif') no-repeat;background-size:100% 100%;"> -->
            <!-- <h1 class="section-heading hidden-xs">ORKA GYM</h1>
                        <div style="position:absolute;z-index:0;top:0;left:0;right:0;bottom:0;margin:auto;margin-top:100px;">
                            <h1 class="section-heading visible-xs small" style="margin-top:100px">ORKA GYM</h1>
                            <h3><small><span class="text-primary">OFFICIAL</span> WEB SITE.</small></h3>
                            <ul class="list-inline">
                                <li style="margin-top:90px;"><a href="tel:03-6260-9115"><i class="fa fa-phone"></i>&nbsp;03-6260-9115</a></li>
                                <li><a href="https://www.facebook.com/orkagym/?pnref=lhc"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                            <p><a href="http://orkagym.jp/contact/" class="btn btn-xl page-scroll">Contact</a></p>
                        </div> -->
                        <h1 class="section-heading visible-xs small">ORKAGYM×医科学研究所</h1>
                        <h3>
                            <small>
                                <span class="text-primary">OFFICIAL</span> WEB SITE.</small>
                            </h3>
                            <ul class="list-inline">
                                <li style="margin-top:90px;">
                                    <a href="tel:03-6260-9115">
                                        <i class="fa fa-phone"></i>&nbsp;03-6260-9115</a>
                                    </li>
                                </ul>
                                <p>
                                    <a href="http://orkagym.jp/contact/" class="btn btn-xl page-scroll">Contact</a>
                                </p>
                            </section>
                            <!-- Message Section -->
                            <section id="Message" class="bg-darkest-gray" style="padding:200px 0;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h1 class="section-heading hidden-xs"><span class="bg-tpblack">Mission & Vision</span></h1>
                                            <h3 class="section-heading visible-xs"><span class="bg-tpblack">Mission & Vision</span></h3>
                                            <h3 class="section-subheading text-muted">ミッション＆ビジョン</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="visible-xs visible-sm">
                                            <!-- <img src="http://nucklepart.hippy.jp/20180421.jpg" class="img-responsive" alt="Message_img_1"> -->
                                            <img src="<?php bloginfo('template_url');?>/img/20200510075303.JPEG" alt="" class="img-responsive">
                                        </p>
                                        <div class="hidden-xs bg-tpblack">
                                            <h3 class="text-center">
                                                MISSION
                                            </h3>
                                            <div class="spacer-m">
                                                <h4 class="text-center">「予防医学のアルゴリズム開発および運動療法の明示化と世界的確立」</h4>
                                                <p> 例えば、運動を行うことで血管の幅が広くなったら、血圧は低下するだろう。これが高血圧の方に対して医師が運動を推奨する理由だ。しかしながら、未だ確立された運動は存在しないため、明確な指示は行えない。私たちは、海外の医学会へ学術発表を重ね、予防医学のアルゴリズムと運動療法を世界的に確立することをミッションとする。</p>
                                            </div>
                                            <div class="spacer-l">
                                                <h3 class="text-center">VISION</h3>
                                                <div class="spacer-m">
                                                    <h4 class="text-center">「健康を再定義し、社会の一助へ」</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="visible-xs container">
                                            <h3 class="text-center">
                                                MISSION
                                            </h3>
                                            <div class="spacer-m">
                                                <h4 class="text-center" style="line-height:1.6em;">「予防医学のアルゴリズム開発および <br>運動療法の明示化と世界的確立」</h4>
                                                <p> 例えば、運動を行うことで血管の幅が広くなったら、血圧は低下するだろう。これが高血圧の方に対して医師が運動を推奨する理由だ。しかしながら、未だ確立された運動は存在しないため、明確な指示は行えない。私たちは、海外の医学会へ学術発表を重ね、予防医学のアルゴリズムと運動療法を世界的に確立することをミッションとする。</h4>
                                                </div>
                                                <div class="spacer-l">
                                                    <h3 class="text-center">VISION</h3>
                                                    <div class="spacer-m">
                                                        <h4 class="text-center">「健康を再定義し、社会の一助へ」</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Concept Section -->
                                <section id="Concept" class="bg-darkest-gray" style="padding:200px 0;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h1 class="section-heading"><span class="bg-tpblack">CONCEPT</span></h1>
                                                <h3 class="section-subheading text-muted">コンセプト</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="visible-xs visible-sm">
                                                <img src="<?php bloginfo('template_url');?>/img/kamiyasan-1.jpg" class="img-responsive"
                                                alt="Concept_img_1">
                                            </p>
                                            <div class="hidden-xs bg-tpblack">
                                                <h3 class="text-center ">
                                                    「予防医学を可視化する」
                                                </h3>
                                                <div class="spacer-l">
                                                    <p>「予防医学」には２つの概念が存在する。１つ目は病気を発症し、その進行を予防する「予防医学」。２つ目は病気を発症しないための「予防医学」。現在の医学では、前者の「予防医学」が発達し、多くの疾患を治療できるようになり、数多くの治療法が開発されてきた。しかし、後者の「予防医学」は、運動にその可能性を示唆されながらも、具体的かつ明確な方法は世界的にも研究が進んでいないのが現状である。<br><br>

                                                        私たちは予防医学のアルゴリズムを研究し、検証を行い、学術発表を重ねてきた。<br>
                                                        ORKA GYM×医科学研究所とは、現代社会の様々な健康問題に対して、その解決策である運動を具体的かつ明確に提供するための世界で唯一の施設である。<br><br>

                                                        病気を発症せず、一生若い身体でいられるように。<br>
                                                        ORKAがライフラインの一部となる。
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="visible-xs">
                                                <div class="container">
                                                    <h3 class="text-center">「予防医学を可視化する」</h3>
                                                    <div class="spacer-l ">
                                                        <p>「予防医学」には２つの概念が存在する。１つ目は病気を発症し、その進行を予防する「予防医学」。２つ目は病気を発症しないための「予防医学」。現在の医学では、前者の「予防医学」が発達し、多くの疾患を治療できるようになり、数多くの治療法が開発されてきた。しかし、後者の「予防医学」は、運動にその可能性を示唆されながらも、具体的かつ明確な方法は世界的にも研究が進んでいないのが現状である。<br><br>

                                                            私たちは予防医学のアルゴリズムを研究し、検証を行い、学術発表を重ねてきた。<br>
                                                            ORKA GYM×医科学研究所とは、現代社会の様々な健康問題に対して、その解決策である運動を具体的かつ明確に提供するための世界で唯一の施設である。<br>

                                                            病気を発症せず、一生若い身体でいられるように。<br>
                                                            ORKAがライフラインの一部となる。
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- PersonalTraining Section -->
                                <section id="PersonalTraining">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-center">
                                                <h1 class="section-heading">EXERCISE THERAPY</h1>
                                                <h3 class="section-subheading text-muted">運動療法</h3>
                                            </div>
                                        </div>
                                        <div class="row spacer-l">
                                            <p class="text-muted">
                                                運動療法とは、「学術的に論理の整合性が高い科学的根拠」のある運動を用いて健康維持・増進させる療法です。「健康=運動」は、多くの方々に認識されていると思いますが、その運動が身体にどのような影響を与えたかということに関して、不明なことが多々あります。筋肉をつける、有酸素運動をする、ということに対して、身体の生体反応がどのように変化したのかを弊社では全て定量化し、メニュー1つ1つに意味を持った運動を処方いたします。
                                            </p>
                                            <p class="text-muted">例えば軽負荷有酸素運動にて、「最大心拍数の 30%で 30 分、週 1 回を 3 ヵ月行うことによ り、血管の幅が 1.0 mm、内壁の厚さ(内壁の厚さが動脈硬化と言われています)が 0.2 mm改 善した」等を、エコーや心電図、脳波などを用いて定量化することで、軽負荷有酸素運動と いう運動療法が身体に与えた影響を可視化することが可能です。</p>
                                        </div>
                                        <div class="row spacer-l">
                                            <div class="col-md-2"></div>
                                            <div class="col-xs-12 col-md-8">
                                                <img src="<?php bloginfo('template_url');?>/img/S__5324811.jpg" alt="運動療法" class="img-responsive">
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </section>
                                    <!-- Trainers Section -->
                                    <section id="Trainers" class="bg-light-gray">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h1 class="section-heading">RESEARCHER</h1>
                                                    <h3 class="section-subheading text-muted">研究者</h3>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 portfolio-item">
                                                    <a href="http://www.takahirokamiya.com/" class="portfolio-link" data-toggle="modal">
                                                        <div class="portfolio-hover">
                                                            <div class="portfolio-hover-content">
                                                                <i class="fa fa-plus fa-3x"></i>
                                                            </div>
                                                        </div>
                                                        <img src="<?php bloginfo('template_url');?>/img/20190702.jpeg" class="img-responsive"
                                                        alt="trainers_img_1">
                                                    </a>
                                                    <div class="portfolio-caption" style="padding:8px;">
                                                        <h4>Takahiro Kamiya</h4>
                                                        <p class="text-muted">神谷 卓宏</p>
                                                        <ul class="list-unstyled spacer-s">
                                                            <small>
                                                                <li>株式会社DL CHASE jAPAN 代表取締役</li>
                                                                <li>京都大学石原研究室共同研究者</li>
                                                                <li>早稲田大学大学院スポーツ科学研究科修了</li>
                                                                <li>アメリカスポーツ医学会 運動生理学士</li>
                                                                <li>HALEO TOP TEAM 所属</li>
                                                                <li>NSCA-CSCS</li>
                                                                <li>NASM-PES</li>
                                                            </small>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Facilities Section -->
                                    <section id="Facilities">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h1 class="section-heading">FACILITY</h1>
                                                    <h3 class="section-subheading text-muted">施設案内</h3>
                                                    <div class="bg-light-gray" style="padding:15px 0;margin-bottom:75px;">
                                                        <p class="text-center">＜営業時間＞
                                                            <br> 平日 10:00 〜 22:00 (21:30 最終受付)
                                                            <br> 土日祝日 10:00 〜 20:00 (19:30 最終受付)
                                                            <br> 休館日 木曜日</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_1">
                                                                <img src="<?php bloginfo('template_url');?>/img/kamiyasan-1.jpg" class="img-responsive"
                                                                alt="facilities_img_1">
                                                            </a>
                                                            <div class="modal fade" id="Modal_1" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_1_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_2">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_2.jpg" class="img-responsive"
                                                                alt="facilities_img_2">
                                                            </a>
                                                            <div class="modal fade" id="Modal_2" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_2_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_3">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_3.jpg" class="img-responsive"
                                                                alt="facilities_img_3">
                                                            </a>
                                                            <div class="modal fade" id="Modal_3" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_3_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_3">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_4">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_4.jpg" class="img-responsive"
                                                                alt="facilities_img_4">
                                                            </a>
                                                            <div class="modal fade" id="Modal_4" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_4_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_4">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_5">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_5.jpg" class="img-responsive"
                                                                alt="facilities_img_5">
                                                            </a>
                                                            <div class="modal fade" id="Modal_5" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_5_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_5">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_6">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_6.jpg" class="img-responsive"
                                                                alt="facilities_img_6">
                                                            </a>
                                                            <div class="modal fade" id="Modal_6" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_6_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_6">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_7">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_7.jpg" class="img-responsive"
                                                                alt="facilities_img_7">
                                                            </a>
                                                            <div class="modal fade" id="Modal_7" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_7_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_7">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_8">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_8.jpg" class="img-responsive"
                                                                alt="facilities_img_8">
                                                            </a>
                                                            <div class="modal fade" id="Modal_8" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_8_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_8">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_9">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_9.jpg" class="img-responsive"
                                                                alt="facilities_img_5">
                                                            </a>
                                                            <div class="modal fade" id="Modal_9" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_9_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_9">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_10">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_10.jpg" class="img-responsive"
                                                                alt="facilities_img_5">
                                                            </a>
                                                            <div class="modal fade" id="Modal_10" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_10_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_10">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_11">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_11.jpg" class="img-responsive"
                                                                alt="facilities_img_11">
                                                            </a>
                                                            <div class="modal fade" id="Modal_11" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_11_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_11">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_12">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_12.jpg" class="img-responsive"
                                                                alt="facilities_img_5">
                                                            </a>
                                                            <div class="modal fade" id="Modal_12" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_12_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_12">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_13">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_13.jpg" class="img-responsive"
                                                                alt="facilities_img_13">
                                                            </a>
                                                            <div class="modal fade" id="Modal_13" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_13_l.jpg"
                                                                            class="img-responsive" alt="facilities_img_13">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_14">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_14.jpg" class="img-responsive"
                                                                alt="facilities_img_14">
                                                            </a>
                                                            <div class="modal fade" id="Modal_14" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_14.jpg"
                                                                            class="img-responsive" alt="facilities_img_14">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="team-member">
                                                            <a href="#" data-toggle="modal" data-target="#Modal_15">
                                                                <img src="<?php bloginfo('template_url');?>/img/facilities_15.jpg" class="img-responsive"
                                                                alt="facilities_img_15">
                                                            </a>
                                                            <div class="modal fade" id="Modal_15" tabindex="-1">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <img src="<?php bloginfo('template_url');?>/img/facilities_15.jpg"
                                                                            class="img-responsive" alt="facilities_img_15">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Price Section -->
                                    <section id="Price">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h1 class="section-heading">PRICE</h1>
                                                    <h3 class="section-subheading text-muted">料金案内</h3>
                                                    <p style="margin-bottom:30px;">初回トライアルおよび月会費はこちらをご覧ください</p>
                                                    <p>
                                                        <a href="<?php bloginfo('template_url');?>/pdf/医科研運動療法【基本料金】.pdf"
                                                         class="text-primary">料金表(PDF)</a>
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                     </section>
                                     <!-- ForCompanies Section -->
                                     <section id="ForCompanies" class="bg-light-gray">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h1 class="section-heading">FOR COMPANIES</h1>
                                                    <h3 class="section-subheading text-muted">法人の皆様へ</h3>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-lg-12">
                                                    <p>Under Construction</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- CompanyOverView Section -->
                                    <section id="CompanyOverView">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <h1 class="section-heading">COMPANY OVERVIEW</h1>
                                                    <h3 class="section-subheading text-muted">企業情報</h3>
                                                    <p class="visible-xs">※表は横にスクロールしてご覧いただけます</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr>
                                                                <th>会社名</th>
                                                                <td>株式会社DL CHASE jAPAN</td>
                                                            </tr>
                                                            <tr>
                                                                <th>役員</th>
                                                                <td>代表取締役 神谷 卓宏
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>住所</th>
                                                                <td>〒153-0042
                                                                    <br>東京都目黒区青葉台1-20-2 中目黒Place(旧フレッグ中目黒) B1F ORKA GYM
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tel.</th>
                                                                <td>
                                                                    <span style="color:#000000;">03-6260-9115</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Mail</th>
                                                                        <td>info@dlcj.co.jp</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>事業内容</th>
                                                                        <td>
                                                                            <p style="margin-bottom:0;">運動療法施設の運営事業</p>
                                                                            <p style="margin-bottom:0;">医科学研究事業</p>
                                                                            <p>健康・スポーツに関する講演事業</p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="ggmap">
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d405.2345707679601!2d139.71024338104252!3d35.65541265333046!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19bb06a0f6850693!2zT1JLQSBHWU3Dl-WMu-enkeWtpueglOeptuaJgA!5e0!3m2!1sja!2sjp!4v1590623148287!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <!-- AthleteSupport Section -->
                                                <section id="AthleteSupport" class="bg-light-gray">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-center">
                                                                <h1 class="section-heading">Research paper</h1>
                                                                <h3 class="section-subheading text-muted">研究論文</h3>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="container">
                                                                <a href="<?php bloginfo('template_url');?>/pdf/臨床免疫.pdf">
                                                                    <img src="<?php bloginfo('template_url');?>/img/20200530.jpg" alt="研究論文" Width="100%">
                                                                </a>
                                                                <div class="spacer_m text-center">
                                                                    運動介入による風邪罹患頻度の改善事例報告
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- Blog Section -->
                                                <section id="Blog">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12 text-center">
                                                                <h1 class="section-heading">BLOG</h1>
                                                                <h3 class="section-subheading text-muted">ブログ</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 col-xs-12" style="margin-bottom:25px;">
                                                                <p class="lead">新着記事</p>
                        <?php // 5件のみ
query_posts('posts_per_page=10');
if (have_posts()) {
	?>
                           <?php
while (have_posts()): the_post();?>
															                             <p style="border-bottom:1px solid #CCC;">
															                                 <a href="<?php the_permalink();?>">
															                                     <span style="margin-right:10px;"><?php the_time('Y.m.d');?></span>
															                                     <?php the_title();?>
															                                 </a>
															                             </p>
															                         <?php endwhile;?>
                         <?php
} else {
	?>
                       <p>ブログの投稿がありません</p>
                       <?php
}
wp_reset_query();
?>
               </div>
               <div class="col-md-6 col-xs-12">
                <p class="lead">アーカイブ</p>
                <ul class="list-unstyled">
                    <?php wp_get_archives('post_type=post&type=monthly&show_post_count=1');?>
                </ul>
            </div>
        </section>
        <!-- Recruit Section -->
        <section id="Recruit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading">RECRUIT</h1>
                        <h3 class="section-subheading text-muted">採用情報</h3>
                        <p>現在募集を行っておりません。</p>
                        <!--<p class="visible-xs">※表は横にスクロールしてご覧いただけます</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 bg-darkest-gray img-rounded spacer_m">
                    <h4 class="text-center">【募集要項】</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <caption class="text-center">&nbsp;</caption>
                            <tbody>
                                <tr>
                                    <td>雇用形態</td>
                                    <td>正社員</td>
                                </tr>
                                <tr>
                                    <td>職務内容</td>
                                    <td>パーソナルトレーニング指導およびフロント業務</td>
                                </tr>
                                <tr>
                                    <td>勤務地</td>
                                    <td>ORKA GYM</td>
                                </tr>
                                <tr>
                                    <td>勤務時間</td>
                                    <td>平日10:00〜22:00 土日祝日10:00〜20:00</td>
                                </tr>
                                <tr>
                                    <td>休日</td>
                                    <td>月に8日間</td>
                                </tr>
                                <tr>
                                    <td>給与</td>
                                    <td>弊社規定に準ずる（試用期間6ヶ月以内）</td>
                                </tr>
                                <tr>
                                    <td>賞与</td>
                                    <td>年2回</td>
                                </tr>
                                <tr>
                                    <td>待遇</td>
                                    <td>交通費支給、制服貸与</td>
                                </tr>
                                <tr>
                                    <td>応募資格</td>
                                    <td>国家資格（理学療法士、管理栄養士etc）およびNATA-ATC、ACSM、NSCA、NASM、JATIの有資格者。その他資格の場合、上記基準と同等の者。</td>
                                </tr>
                                <tr>
                                    <td>応募方法</td>
                                    <td>最終学歴とスポーツ競技歴ならびに自己PR文をメールにて送信下さい。（書き方自由）</td>
                                </tr>
                                <tr>
                                    <td>選考方法</td>
                                    <td> 一次試験（書類審査） 二次試験（面接および実技試験） 三次面接（役員面接）</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="list-unstyled center-nav text-center">
                        <li class="lead">【施設見学・会社説明】</li>
                        <li>事前受付が必要となります。希望する日程を採用担当宛までメールにてご連絡ください。</li>
                        <li>&nbsp;</li>
                        <li class="lead">【応募・問い合わせ先】</li>
                        <li>
                            <address>
                                <strong>株式会社 DL CHASE jAPAN</strong>
                                <br> 〒153-0042
                                <br> 東京都目黒区青葉台1-20-2 中目黒Place(旧フレッグ中目黒) B1F
                                <br>
                            <abbr title="Phone">TEL:</abbr> 03-6260-9115
                            <br>
                            <a class="page-scroll" href="#ReserveContact">Mail：info@dlcj.co.jp</a>
                            <br> 窓口：採用担当宛
                        </address>
                    </li>
                </ul>
            </div>
        </div>-->
    </div>
</div>
</section>
<!-- Footer -->
<?php get_footer();?>
