<!-- #site-footer-widgets -->
<section id="site-footer-widgets">
<div class="ht-container">

<?php if ( is_active_sidebar( 'ht_footer_widgets' ) ) { ?>
<div class="ht-grid ht-grid-gutter-20">
	<?php dynamic_sidebar( 'ht_footer_widgets' ); ?>
</div>	
<?php } ?>

</div>
</section>
<!-- /#site-footer-widgets -->

<!-- #site-footer -->
<footer id="site-footer" class="clearfix" itemtype="http://schema.org/WPFooter" itemscope="itemscope">
<div class="ht-container">

  <small id="copyright" role="contentinfo">&copy;
            <!--2020- -->2020-<?php echo date('Y'); ?> SHINTAKU LLC. All Rights Reserved.</small>

  <?php if ( has_nav_menu( 'footer-nav' ) && $ht_theme_supports == 'yes' ) { ?>
	  <nav id="footer-nav" role="navigation">
	  	<?php wp_nav_menu( array('theme_location' => 'footer-nav', 'menu_id' => false, 'menu_class' => false, 'container_class' => false, 'depth' => 1, )); ?>
	  </nav>
  <?php } ?>

</div>
</footer> 
<!-- /#site-footer -->

<?php wp_footer(); ?>

</div>
<!-- /#site-container -->
</body>
</html>