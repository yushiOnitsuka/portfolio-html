<?php get_header(); ?>
<main id="luxy" class="l-container l-container--lower p-work">
        <h2 class="c-about_title_h2"><span>WORK</span></h2>
        <section>
            <ul class="l-container--work p-work__slider">

            <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
                <!-- a loop -->
                    <li class="p-work__slider__li">
                        <a class="js-hover c-img_hover" href="<?php the_permalink(); ?>">
                            <figure><?php echo my_get_thumbnail(get_the_ID(),'archive_eycatch'); ?></figure>
                            <div class="p-work__slider__txt">
                                <h3><?php the_title(); ?></h3>
                                <p><?php $t_explain = get_field('explain'); ?><?php echo $t_explain; ?></p>
                                <ul>
                                    <?php my_get_roletag(); ?>
                                </ul>
                            </div>
                        </a>
                    </li>
                <!-- a loop -->
                </li>
                <?php endwhile; else: ?>
                    <p>該当の記事はありません。</p>
                <?php endif; ?>
            </ul>
        </section>
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


