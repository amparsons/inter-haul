<?php 
/*
Template Name: News Posts
*/
get_header(); ?>

    <section>
    	<div class="head">
        	<h1>Latest News</h1>
            <span class="sub"><?php the_excerpt(); ?></span>
        </div>
       
       	<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
			$args = array( 'post_type' => 'post', 'paged' => $paged );
			$wp_query = new WP_Query($args);
			
			while ( have_posts() ) : the_post(); 
		?>
       
        <article>
            <a href="<?php echo get_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
                <p><?php echo truncate($post->post_content, 200); ?></p>  
            </a>
            <?php
            $categories = get_the_category();
            $separator = ' ';
            $output = '';
            
            if($categories){
                foreach($categories as $category) {
                    $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                }
                ?>
               <p class="cats"><?php the_date('j F Y'); ?> &bull; Posted in <?php echo trim($output, $separator); ?></p>	
            <?php
            }
            ?>   
        </article>
        
        <?php endwhile; ?>
					
		<?php my_pagination(); ?>

    </section>
    
    <aside>
    	<h2>Category</h2>
        <ul>
        	<?php wp_list_categories('orderby=name&title_li='); ?> 
        </ul>
    </aside>


<?php get_footer(); ?>
