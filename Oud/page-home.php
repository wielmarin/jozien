<?php get_header(); ?>

<div id="intro">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
</div>


ADD CONTACT FORM

<?php get_footer(); ?>