<?php get_header(); ?>

<main id="luxy" class="l-container l-container--lower p-work">
<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
        <!-- カスタムフィールド -->
        <?php 
            $t_mockup = get_field('mockup');
            $t_mockupurl = wp_get_attachment_image_src($t_mockup, 'full'); 
            $t_comp_page = get_field('comp_page'); 
            $t_site_category = get_field('site_category'); 
            $t_product_date = get_field('product_date'); 
            $t_overview = get_field('overview'); 
            $t_pc_camp = get_field('pc_camp');
            $t_pc_campurl = wp_get_attachment_image_src($t_pc_camp, 'full'); 
            $t_planning = get_field('planning'); 
            $t_sp_comp_01 = get_field('sp_comp_01');
            $t_sp_comp_01url = wp_get_attachment_image_src($t_sp_comp_01, 'full'); 
            $t_sp_comp_02 = get_field('sp_comp_02');
            $t_sp_comp_02url = wp_get_attachment_image_src($t_sp_comp_02, 'full'); 
            $t_sp_comp_03 = get_field('sp_comp_03');
            $t_sp_comp_03url = wp_get_attachment_image_src($t_sp_comp_03, 'full'); 
            $t_design_concept_explain = get_field('design_concept_explain'); 
            $t_design_concept = get_field('design_concept'); 
        ?>
        <!-- カスタムフィールド -->
        <div class="l-container p-work_title --desing">
            <div>
                <h2 class="c-work_title_h2"><?php the_title(); ?><br><span><?php if($t_site_category){ echo $t_site_category; } ?></span></h2>
                <p>組織改革がメインのコンサルティング会社</p>
                <a class="c-arrow_anime--more" href="<?php echo $t_comp_page; ?>" target="blank">
                    <span>view design comp</span>
                    <div class="c-arrow_anime">
                        <div><span></span><span></span><span></span></div>
                    </div>
                </a>
            </div>
            <?php if($t_mockupurl){ ?><img src="<? echo $t_mockupurl[0]; ?>" alt=""></p><? }  ?>
        </div>
        <section>
            <div class="l-container--work u-bg_main">
                <div class="p-overview">
                    <dl>
                        
                        <div class="p-overview__dtset">
                            <dt><h3>product Date</h3></dt>
                            <dd><?php echo $t_product_date; ?></dd>
                        </div>
                        <div class="p-overview__dtset">
                            <dt><h3>Role</h3></dt>
                            <div class="p-overview__dtset__role">
                                <dd><?php my_get_roletag(); ?></dd>
                            </div>
                        </div>
                        <div class="p-overview__dtset">
                            <dt><h3>Overview</h3></dt>
                            <dd><?php echo $t_overview; ?></dd>
                        </div>
                    </dl>
                </div>
            </div>  
        </section>　
        <section>
                <div class="l-container--work">
                    <div class="p-planning">
                        <figure class="p-planning__img"><?php if($t_pc_campurl){ ?><img src="<? echo $t_pc_campurl[0]; ?>" alt=""></p><? }  ?></figure>
                        <div class="p-planning__content">
                            <div class="p-planning__title">
                                <div class="js-slidein --bg_black"><h2 class="c-top_h2"><span>PLANNING</span></h2></div>
                                <p>以下の前提条件を設けたうえで、デザインに着手いたしました。</p>
                            </div>
                            <?php echo $t_planning; ?>
                        </div>
                    </div>
                </div>  
            </section>
        <section>
            <div class="l-container--work">
                    <div class="p-concept --design">
                        <div class="p-concept__img">
                            <figure><?php if($t_sp_comp_01url){ ?><img src="<? echo $t_sp_comp_01url[0]; ?>" alt=""></p><? }  ?></figure>
                            <figure><?php if($t_sp_comp_02url){ ?><img src="<? echo $t_sp_comp_02url[0]; ?>" alt=""></p><? }  ?></figure>
                            <figure><?php if($t_sp_comp_03url){ ?><img src="<? echo $t_sp_comp_03url[0]; ?>" alt=""></p><? }  ?></figure>
                        </div>
                        <div class="p-concept__content">
                            <div class="p-concept__title">
                                <div class="js-slidein"><h2 class="c-top_h2"><span>DESIGN CONCEPT</span></h2></div>
                                <p><?php echo $t_design_concept_explain; ?></p>
                            </div>
                            <?php echo $t_design_concept; ?>
                        </div>
                    </div>
            </div>  
        </section>
        <section>
            <div class="l-container--work">
                <div class="p-lower_contact">
                    <h2 class="c-top_h2 u-mb_40">feel free to contact</h2>
                    <a class="p-arrow_anime--contact" href="/contact"><div><span></span><span></span><span></span></div></a>
                </div>
            </div>
        </section>
        <?php endwhile; else: ?>
            <article class="content-wrapper">
                <p>該当の記事はありません。</p>
            </article>         
        <?php endif; ?>
    </main>
<?php get_footer();

