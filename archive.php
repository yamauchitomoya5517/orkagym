<?php
/*
Template Name: archive
*/
?>
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="「ORKA GYM」は国際ライセンスの最高峰を取得した「世界」で指導可能な”プロフェッショナル”トレーナーズジムです。">
        <meta name="author" content="">
        <meta name="format-detection" content="telephone=no">
        <title>
            <?php bloginfo('name'); ?> |
                <?php bloginfo('description'); ?>
        </title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php bloginfo('template_url'); ?>/css/agency.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body id="page-top" class="index">
        <?php include_once 'analyticstracking.php'; ?>
            <!-- Navigation -->
            <?php get_header(); ?>
                <!-- Archive Section -->
                <section style="background-color:#222;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1 class="section-heading">Archive</h1>
                                <h3 class="section-subheading text-muted">アーカイブ</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <?php query_posts('post_type=post&paged='.$paged); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) : the_post(); ?>
                            </div>
                            <div class="col-lg-12">
                                <p>
                                    <?php the_time('Y年m月j日'); ?>
                                </p>
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            </div>
                            <div class="col-lg-12">
                                <?php endwhile; ?>
                                    <?php else : ?>
                                        <h4>記事が見つかりません</h4>
                                        <p>記事が存在しないときのテキスト</p>
                                        <?php endif; ?>
                                            <?php wp_reset_query(); ?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <!--ページ送り-->
<nav class="pagenav text-center spacer-l">
    <span class="page-numbers current">1</span>
    <a class="page-numbers" href="http://wp-hoge.com/?paged=2">2</a>
    <a class="page-numbers" href="http://wp-hoge.com/?paged=3">3</a>
    <a class="page-numbers" href="http://wp-hoge.com/?paged=4/">4</a>
    <a class="next page-numbers" href="http://wp-hoge.com/?paged=2">次へ »</a></div>
</nav>
<!--//ページ送り-->
                        </div>
                    </div>
                </section>
                <!-- Footer -->
                <?php get_footer(); ?>
