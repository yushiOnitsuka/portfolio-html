<?php get_header(); ?>

<!-- main content -->
<main>
    <article class="p-news__cate_title c-cate_title">
        <h1 class="c-title--l"><span>news</span>お知らせ</h1>
    </article>
    <article class="p-news__content l-article--narrow">
        <ul class="p-news__content__list">
            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
            <!-- a loop -->
            <li class="p-news__content__list__item c-link">
                <span class="c-date"><?php echo get_the_date(); ?></span>
                <span class="c-cate"><?php the_category(); ?></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <!-- /a loop -->
            <?php endwhile; else: ?>
            <article class="content-wrapper">
                <p>該当の記事はありません。</p>
            </article>
            <?php endif; ?>
        </ul>
    </article>
</main>

<?php get_footer();

