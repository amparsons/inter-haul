<?php get_header(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
    <section>
    	<div class="head">
        	<h1><?php the_title(); ?></h1>
            <span class="sub"><?php the_excerpt(); ?></span>
        </div>
        <?php the_content(); ?>
    </section>
    
    <aside>
    	<h2>Sidebar Heading</h2>
        <ul class="sidemenu-grandchild">
			<?php
            if( is_page() ) {
                if( !$post->post_parent ) {
                    $pagelist = '<li><a href="'.get_page_link($post->ID) .'">' . $post->post_title . '</a>';
                    $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
                    if( $children ) $pagelist .= '<ul>' . $children . '</ul>';
                    $pagelist .= '</li>';
                }
                elseif( $post->ancestors ) {
                    // get the top ID of this page. Page ids DESC so top level ID is the last one
                    $ancestor = end($post->ancestors);
                    $pagelist = wp_list_pages('title_li=&include='.$ancestor.'&echo=0');
                    $pagelist = str_replace('</li>', '', $pagelist);
                    $pagelist .= '<ul>' . wp_list_pages('title_li=&child_of='.$ancestor.'&echo=0') .'</ul></li>';
                }
                echo $pagelist;
            }
            ?>
        </ul>
    </aside>
    
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
