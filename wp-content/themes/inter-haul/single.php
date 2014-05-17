<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section>
    	<div class="head">
        	<h1><?php the_title(); ?></h1>
            <span class="sub"><?php the_excerpt(); ?></span>
        </div>
        <?php 
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail('large');
			}
		?>
        <?php the_content(); ?>
        
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
    </section>
    
    <aside>
    	<h2>Category</h2>
        <ul>
        	<?php wp_list_categories('orderby=name&title_li='); ?> 
        </ul>
    </aside>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
