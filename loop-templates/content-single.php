<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php if(has_post_thumbnail()): ?>

		<div class="featured-image-in-post">

			<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

		</div>

	<?php endif; ?>

	

	<div class="entry-content">

		<?php
			the_content();
			//understrap_link_pages();
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
