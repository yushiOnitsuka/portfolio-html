<?php get_header('newssub'); ?>

	<main>
		<h1>
			<span>
				h1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミーh1タイトルダミー
			</span>
		</h1>
		<section class="cont">
		<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>	
			<?php
				foreach((get_the_tags()) as $tag) {
					echo '<em class="' . $tag->slug . '">' . $tag->name . '</em>' . ' ';
				}
			?>
			<?php the_content(); ?>

		<?php endwhile; else: ?>
            <p>該当の記事はありません。</p>
        <?php endif; ?>
		</section>
	</main>

<?php get_footer();
