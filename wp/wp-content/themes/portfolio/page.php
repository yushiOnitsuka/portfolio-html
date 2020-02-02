<?php get_header(); ?>
<main id="luxy" class="l-container l-container--lower ">
<h2 class="c-about_title_h2"><span><?php the_title(); ?></span></h2>
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>

<?php endif; ?>
</main>

<?php get_footer();


