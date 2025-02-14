<?php
/**
 * Partial template for content in page.php
 *
 * @package aveiromais
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php
		the_content();
		aveiromais_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php aveiromais_edit_post_link(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
