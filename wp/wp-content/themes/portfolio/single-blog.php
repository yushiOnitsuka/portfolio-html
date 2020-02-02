<?php get_header(); ?>
<main id="luxy" class="l-container l-container--lower p-work">
    <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>
            <p>該当の記事はありません。</p>
        <?php endif; ?>
</main>
        
<?php get_footer();

