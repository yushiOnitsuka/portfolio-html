<?php get_header(); ?>
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

<main id="luxy" class="l-container">
        <section id="p-full_screen" class="l-container__px">
            <div class="p-mv">
                <div class="p-mv__bg">
                    <div class="p-mv__bg__title01 u-zi_-1"></div> 
                    <div class="p-mv__bg__title02 u-zi_-1"></div>
                    <h1 class="p-mv__title c-title_slidein--h1">
                        <span>YUSHI</span><br>
                        <span>ONITSUKA</span>
                    </h1>
                    <p class="p-mv__occupation">web designer / corder</p>
                </div>
                <div class="p-arrow_anime--scroll_down">
                    <div class="c-arrow_anime"><div><span></span><span></span><span></span></div></div>
                    <div class="c-arrow_anime--ripples u-zi_-1"></div>
                </div>
            </div>
        </section>
        <section class="l-container__px">
            <div class="p-top_about">
                <div class="p-top_about__txt">
                    <div class="p-top_about__txt__bg u-zi_-1"><span>ABOUT</span></div>
                    <h2 class="c-top_h2"><span>ABOUT</span></h2>
                    <p>
                        大切なのは、「しっかり完成までつくりあげて、運用していくこと」です。
                        そのためには、お客様と制作者の信頼関係が必要だと考えます。
                    </p>
                </div>
                <div class="p-top_about__img">
                    <a class="js-hover c-img_hover" href="/about.html">
                        <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/sp_top_about.jpg" alt=""></figure>
                    </a>
                </div>
                <a class="c-arrow_anime--more u-pc_none--flex" href="/about.html">
                    <span>more</span>
                    <div class="c-arrow_anime">
                        <div><span></span><span></span><span></span></div>
                    </div>
                </a>
            </div>
        </section>
        <section class="l-container__px">
            <div class="p-top_work">
                <div class="p-top_work__txt">
                    <div>
                        <div class="p-top_work__txt__bg u-zi_-1"><span>WORK</span></div>
                        <h2 class="c-top_h2 p-top_work__txt__h2"><span>WORK</span></h2> 
                    </div>
                    <a class="c-arrow_anime--more u-sp_none--flex" href="/work/">
                        <span>more</span>
                        <div class="c-arrow_anime">
                            <div><span></span><span></span><span></span></div>
                        </div>
                    </a>
                </div>
                <ul class="p-top_work__slider">
                    <li class="p-top_work__slider__li">
                        <a class="js-hover c-img_hover" href="/work/ailogo/">
                            <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_work_010.jpg" alt=""></figure>
                            <div class="p-top_work__slider__txt">
                                <h3>ailogo</h3>
                                <p>私が企画から制作、運営まで手掛けているオーダーメイドペアルックグッズ専門店です。</p>
                                <ul>
                                    <li>Planning</li>
                                    <li>Marketing</li>
                                    <li>Management</li>
                                    <li>Writing</li>
                                    <li>photographing</li>
                                    <li>Illustration</li>
                                    <li>UI design / Coding</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="p-top_work__slider__li">
                        <a class="js-hover c-img_hover" href="/work/consulting/">
                            <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_work_020.jpg" alt=""></figure>
                            <div class="p-top_work__slider__txt">
                                <h3>コンサルティング会社（仮サイト）</h3>
                                <p>組織改革がメインのコンサルティング会社のサイトイメージです。</p>
                                <ul>
                                    <li>UI design</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li class="p-top_work__slider__li">
                        <a class="js-hover c-img_hover" href="/work/dental/">
                            <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_work_030.jpg" alt=""></figure>
                            <div class="p-top_work__slider__txt">
                                <h3>歯科医院（仮サイト）</h3>
                                <p>治療ではなく、予防がメインの歯科医院のサイトイメージです。</p>
                                <ul>
                                    <li>Writing</li>
                                    <li>UI design</li>
                                </ul>
                            </div>
                        </a>
                    </li>
                </ul>
                <a class="c-arrow_anime--more u-pc_none--flex" href="/work/">
                    <span>more</span>
                    <div class="c-arrow_anime">
                        <div><span></span><span></span><span></span></div>
                    </div>
                </a>
            </div>
        </section>
        <section class="l-container__px">
            <div class="p-top_hobby">
                <div class="p-top_hobby__txt">
                    <div class="p-top_hobby__txt__bg u-zi_-1"><span>HOBBY</span></div>
                    <h2 class="c-top_h2"><span>HOBBY</span></h2>
                    <p>
                        趣味でイラストの制作もしております。<br>
                        webサイトと親和性の高い線画イラストがメインです。<br>
                        作品一覧は<a href="https://www.behance.net/yushi-onitsuka" target="brank"><span></span>こちら（Behance）</a>から。
                    </p>
                </div>
                <div class="p-top_hobby__img js-fadein_continuous">
                    <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_hobby_illust_010.png" alt=""></figure>
                    <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_hobby_illust_020.png" alt=""></figure>
                    <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/top_hobby_illust_030.png" alt=""></figure>
                </div>
            </div>
        </section>
        <section class="l-container__px">
            <div class="p-top_contact">
                <a id="js-contact"  href="mailto:contact&#64;yushi-onitsuka.com">
                    <h2 class="c-top_h2">feel free<br class="u-pc_none"> to contact</h2>
                    <div class="p-arrow_anime--contact"><div><span></span><span></span><span></span></div></div>
                </a>
            </div>
        </section>
    </main>

<?php endwhile; else: ?>
            
<?php endif; ?>


<?php get_footer();