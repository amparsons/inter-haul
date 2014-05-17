<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <div id="navigation">
        <div class="alignleft"><?php previous_posts_link('&laquo; Older News') ?></div>
        <div class="alignright"><?php next_posts_link('Latest News &raquo;') ?></div>
    </div>
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'pulse' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'interhaul' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php if (is_tax()) : ?> 

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

<?php else : ?>

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

<?php endif; ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <ul class="navigation">
        <div class="alignleft"><?php previous_posts_link('&laquo; Older News') ?></div>
        <div class="alignright"><?php next_posts_link('Latest News &raquo;') ?></div>
    </ul>
<?php endif; ?>
