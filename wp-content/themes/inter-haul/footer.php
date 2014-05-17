			<article class="b-one blocks" >
                <a class="morenews" href="<?php bloginfo('url'); ?>/news/">More News &rsaquo;</a>
                <h2>Latest News</h2>
                <?php 
                    query_posts('showposts=1'); 
                    
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                ?>
                <a href="<?php the_permalink(); ?> ">
                    <div class="date">
                        <span class="day"><?php the_time('j'); ?></span>
                        <span class="month"><?php the_time('F'); ?></span>
                    </div>
                    <p><?php echo truncate($post->post_content, 200); ?> </p>
                    <span class="more">Learn more &rsaquo;</span>
                </a>
                <?php endwhile; endif; ?>
            </article>
            
            <div class="b-two blocks">
                <h2>Newsletter</h2>
                <form action="#" method="post">
                    <label>Sign-up for updates</label>
                    <input name="" type="email" required> 
                    <input name="" type="submit" value="">
                </form>
            </div>
            
            <div class="b-three blocks">
                <h2>Contact</h2>
                <div class="columns">
                    <div class="left">
                        <p>T: 01443 844986</p>
                        <p>F: 01433 84498</p>
                        <a href="#">Email Interhaul</a>
                    </div> 
                    <div class="right">
                        <p>21 Taff Centre</p>
                        <p>Tonteg Road,</p>
                        <p>Treforest</p>
                        <p>S.Wales CF37 5UA</p>
                    </div>
                </div>
            </div>
            
            <footer>
				<?php
                    wp_nav_menu(
                        array(
                        'menu'		  => 'footer-nav',
                        'container'       => '',
                        'depth' => '2',
						'menu_class'	=> 'footernav'
                    ));
                ?>
                <ul class="social">
                    <li><a class="facebook" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="linkedin" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="twitter" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                    <li><a class="youtube" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/social-default.png" width="20" height="20" alt="Facebook"></a></li>
                </ul>
            </footer>
        </div> <!-- End of wrapper -->
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */
	
		wp_footer();
	?>
    </body>
</html>