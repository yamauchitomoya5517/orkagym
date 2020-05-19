<?php
if(have_posts()):
while (have_posts()):
the_post();
$singletitle = get_the_title();    // 表示記事のtitle
$currentId = $post->ID;        // 表示記事のID
$slug  = get_page_uri(get_the_ID());     // slug取得
// http://w3q.jp/t/3555
$next_post = get_next_post();
$prev_poxt = get_previous_post();
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
            <?php echo $post->post_title;  ?> - ブログ
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

    <body id="page-top" class="bg-darkest-gray">
        <?php include_once("analyticstracking.php") ?>
            <!-- Navigation -->
            <?php get_header(); ?>
                <!-- Blog Section -->
                <section id="Blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1 class="section-heading">Blog</h1>
                                <h3 class="section-subheading text-muted">ブログ</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2><?php echo $post->post_title;  ?></h2>
                                <p class="text-muted">
                                    <?php echo get_the_date(); ?>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <hr>
                                <?php the_content(); ?>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a style="float: left; clear: left;" href="<?php if (!empty( $prev_poxt )){ echo get_permalink( $prev_poxt->ID ); }else{ echo " # "; } ?>">&laquo; 前へ</a>
                            <a style="float: right; clear: right;" href="<?php if (!empty( $next_post )){ echo get_permalink( $next_post->ID ); } else{ echo " # "; } ?>">次へ &raquo;</a>
                        </div>
                    </div>
                </section>
                <!-- Footer -->
                <?php get_footer(); ?>
                    <?php         endwhile;
        else :
        echo "<h3>404 Error</h3>";
        echo "<p>このカテゴリの投稿がありません</p>";
        exit();
        endif;
        ?>
