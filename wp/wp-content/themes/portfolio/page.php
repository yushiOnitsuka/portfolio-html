<?php get_header(); ?>

<main>
<h1><?php the_title(); ?></h1>	
	<section class="cont">
		<?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
		<p>まずは、お気軽にフォームにてお問い合わせください。内容確認後、担当者よりご連絡させていただきます。<br>
		下記の必要事項をご入力の上「送信する」ボタンを押してください。※印は必須項目となります。</p>
		<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p>該当の記事はありません。</p>
		<?php endif; ?>
	</section>
</main>

<?php get_footer();

