<?php

// ページネーション ------------------------------------------------------------------------------------------
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        // echo "<div id=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        echo '<nav class="pagination"><ul>';
        // echo "<span class=\"pages\">".$paged." / ".$pages."</span>";

        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
            echo "<li class=\"prev\"><a href='".get_pagenum_link(1)."'>&laquo; First</a></li>";
        }
        // if($paged > 1 && $showitems < $pages)
        if ($paged > 1) {
            echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>&#171; 前へ</a></li>";
        }

        for ($i = 1; $i <= $pages; ++$i) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? '<li class="current"><strong>'.$i.'</strong></li>' : "<li><a href='".get_pagenum_link($i)."' class=\"page larger\">".$i.'</a></li>';
                // echo ($paged == $i)? "<li><span class=\"current\">".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
            }
        }
        // if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a></li>";
        if ($paged < $pages) {
            echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'">次へ &#187;</a></li>';
        }
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) {
            echo "<li class=\"next\"><a href='".get_pagenum_link($pages)."'>Last &raquo;</a></li>";
        }
        echo "</ul></nav>\n";
    }
}
/* 投稿アーカイブページの作成 */
function add_nen_year_archives($link_html)
{
    $regex = array(
        "/ title='([\d]{4})'/" => " title='$1年'",
        "/ ([\d]{4}) /" => ' $1年 ',
        "/>([\d]{4})<\/a>/" => '>$1年</a>',
    );
    $link_html = preg_replace(array_keys($regex), $regex, $link_html);

    return $link_html;
}
add_filter('get_archives_link', 'add_nen_year_archives');
