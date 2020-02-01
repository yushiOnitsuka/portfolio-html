<?php get_header('news'); ?>
<main>
	<h1>ニュース一覧</h1>	
	<section class="cont">		
		<ul class="news_index_inner">
		<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
					<?php
						foreach((get_the_tags()) as $tag) {
							echo '<em class="icon_' . $tag->slug . '">' . $tag->name . '</em>' . ' ';
						}
					?>
					<em class="icon_ir">IR情報</em>
					<span><?php the_title(); ?></span>
				</a>
			</li>
	<?php endwhile; else: ?>
		<p>該当の記事はありません。</p>
	<?php endif; ?>
	</ul>
	</section>
</main>
<?php get_footer();

