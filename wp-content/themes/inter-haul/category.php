<?php
/* 
/**
 * The template for displaying Category Results pages.
 *
 * @package WordPress
 * @subpackage Inter Haul
 */
get_header(); ?>

    <section>
    	<div class="head">
        	<h1><?php printf( __( 'Category: %s', 'cauldron' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
        </div>
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) )
				echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
		?>
    </section>
    
    <aside>
    	<h2>Category</h2>
        <ul>
        	<?php wp_list_categories('orderby=name&title_li='); ?> 
        </ul>
    </aside>

<?php get_footer(); ?>
