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
    <?php include_once("analyticstracking.php") ?>
        <!-- Navigation -->
        <?php get_header(); ?>

            <section id="page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="section-heading"> 404 Error</h1>
                            <h3 class="section-subheading text-muted">File not found.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>アクセスしようとしたページが見つかりません。</p>
                            <p>申し訳ございません。
                                <br /> お客様がお探しのページが見つかりませんでした。
                                <br /> 削除されたか、入力したアドレスが変更になっている可能性があります。
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <!-- Footer -->
            <?php get_footer(); ?>
