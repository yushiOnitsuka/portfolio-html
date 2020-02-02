<?php get_header(); ?>
<main id="luxy" class="l-container l-container--lower p-about">
<h2 class="c-about_title_h2"><span><?php the_title(); ?></span></h2>
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; else: ?>

<?php endif; ?>
<section>
    <div class="l-container--about">
        <div class="p-lower_contact">
            <h2 class="c-top_h2 u-mb_40">feel free to contact</h2>
            <a class="p-arrow_anime--contact" href="/contact"><div><span></span><span></span><span></span></div></a>
        </div>
    </div>
</section>
</main>

<?php get_footer();


