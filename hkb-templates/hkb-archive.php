<?php
/**
* Theme template for archive display
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'page-header', 'kb' ); ?>

<!-- #primary -->
<div id="primary" class="<?php echo get_theme_mod( 'ht_kb_sidebar', 'sidebar-right' ); ?> clearfix"> 
<div class="ht-container">

<!-- #content -->
<main id="content" role="main" itemscope="itemscope" itemprop="mainContentOfPage">
<!-- #ht-kb -->
<div id="hkb" class="hkb-template-archive">

    <?php hkb_get_template_part('hkb-content', 'archive'); ?>

</div>
<!-- /#ht-kb -->
</main>
<!-- /#content -->

<?php $ht_kb_sidebar = get_theme_mod( 'ht_kb_sidebar', 'sidebar-right' );
if ( $ht_kb_sidebar != 'sidebar-off') {
get_sidebar( 'kb' ); } ?>

</div>
<!-- /.ht-container -->
</div>
<!-- /#primary -->

<section style="text-align:center;">
    <h2>シンタクの予定</h2>
    <p>以下のYouCanBookより、お見積り〜人生相談まで直接ご予約いただけます。<br>自動でZoomのURLが発行されますので、どんなことでもお気軽にご予約ください。
    </p>
    <iframe src="https://shintaku.youcanbook.me/?noframe=true&skipHeaderFooter=true" id="ycbmiframeshintaku" style="width:100%;height:1000px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true"></iframe><script>window.addEventListener && window.addEventListener("message", function(event){if (event.origin === "https://shintaku.youcanbook.me"){document.getElementById("ycbmiframeshintaku").style.height = event.data + "px";}}, false);</script>
</section>

<?php get_footer(); ?>
