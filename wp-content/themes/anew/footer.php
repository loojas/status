		</div><!--/.main-->
	</div><!--/.container-inner-->
	
	<footer id="footer">	
		<?php // footer widgets
			$total = 4;
			if ( ot_get_option( 'footer-widgets' ) != '' ) {
				
				$total = ot_get_option( 'footer-widgets' );
				if( $total == 1) $class = 'one-full';
				if( $total == 2) $class = 'one-half';
				if( $total == 3) $class = 'one-third';
				if( $total == 4) $class = 'one-fourth';
				}

				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
		{ ?>		
		<section id="footer-widgets" class="container">
			<div class="pad group">
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
		
				<div class="footer-widget-<?php echo $i; ?> grid <?php echo $class; ?> <?php if ( $i == $total ) { echo 'last'; } ?>">
					<?php dynamic_sidebar( 'footer-' . $i ); ?>
				</div>
		
					<?php } ?>
				<?php } ?>
			</div><!--/.pad-->
		</section><!--/#footer-widgets-->	
		<?php } ?>
		
		<?php if ( has_nav_menu( 'footer' ) ): ?>
			<nav class="nav-container group" id="nav-footer">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap"><?php wp_nav_menu( array('theme_location'=>'footer','menu_class'=>'nav container group','container'=>'','menu_id'=>'','fallback_cb'=>false) ); ?></div>
			</nav><!--/#nav-footer-->
		<?php endif; ?>
		
		<section id="footer-bottom">
			<div class="container">
			
				<a id="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
				
				<div class="pad group">				
					<div class="grid one-half">
					
						<?php if ( ot_get_option('footer-logo') ): ?>
							<img id="footer-logo" src="<?php echo ot_get_option('footer-logo'); ?>" alt="<?php get_bloginfo('name'); ?>">
						<?php endif; ?>
						
						<div id="copyright">
							<?php if ( ot_get_option( 'copyright' ) ): ?>
								<p><?php echo ot_get_option( 'copyright' ); ?></p>
							<?php else: ?>
								<p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e('All Rights Reserved.','anew'); ?></p>
							<?php endif; ?>
						</div><!--/#copyright-->
						
						<?php if ( !ot_get_option( 'credit' ) ): ?>
						<div id="credit">
							<p><?php _e('Powered by','anew'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress</a>. <?php _e('Theme by','anew'); ?> <a href="http://alxmedia.se" rel="nofollow">Alx</a> | <a href="http://www.jwp24.com" >Free Wordpress Themes</a>.</p>
						</div><!--/#credit-->
						<?php endif; ?>
						
					</div>		
					<div class="grid one-half last">	
						<?php alx_social_links() ; ?>
					</div>		
				</div><!--/.pad-->
				
			</div><!--/.container-->
		</section><!--/#footer-bottom-->
		
	</footer><!--/#footer-->

</div><!--/#wrapper-->

<?php wp_footer(); ?>
</body>
</html>