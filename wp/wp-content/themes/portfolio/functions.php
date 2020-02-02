<?php

function theme_setup(){
	//titleタグ
	add_theme_support('title-tag');
	//アイキャッチ画像登録
    add_theme_support('post-thumbnails');
    //アイキャッチ画像のサイズをカスタマイズ
    add_image_size('top_work_eycatch',927,576,true);
    add_image_size('top_blog_eycatch',363,221,true);
    add_image_size('archive_eycatch',456,283,true);
}
add_action('after_setup_theme','theme_setup');


function enqueue_scripts(){
	//css
	wp_enqueue_style('main-child', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), '1.0', false);
    // JavaScript
    // WordPress本体のjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script( 'jquery-min-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1', true );
    wp_enqueue_script( 'tweenmax-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array(), '2.1.3', true );
    wp_enqueue_script( 'matchHeight-child', get_stylesheet_directory_uri() . '/dist/js/jquery.matchHeight-min.js', array('jquery-min-js'), '', true );
    wp_enqueue_script( 'slick-child', get_stylesheet_directory_uri() . '/dist/js/slick.min.js', array('jquery-min-js'), '', true );
    wp_enqueue_script( 'luxy-child', get_stylesheet_directory_uri() . '/dist/js/luxy.js', array('jquery-min-js'), '', true );
    wp_enqueue_script( 'main-child', get_stylesheet_directory_uri() . '/dist/js/script.js', array('jquery-min-js'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


//記事表示時の整形無効
add_action(
	'wp_head',
	function(){
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}
);

//ビジュアルエディタ(TinyMCE)の整形無効
add_filter(
	'tiny_mce_before_init',
	function($init_array){
		global $allowedposttags;
		$init_array['valid_elements']          = '*[*]';
		$init_array['extended_valid_elements'] = '*[*]';
		$init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
		$init_array['indent']                  = true;
		$init_array['wpautop']                 = false;
		$init_array['force_p_newlines']        = false;
		return $init_array;
	}
);


//エディタのビジュアル・テキスト切替でコード消滅を防止
if ( !function_exists( 'st_custom_editor_settings' ) ) {
	function st_custom_editor_settings( $initArray ) {
		$initArray['valid_children'] = '+body[style],+body[script],+div[div|span],+span[span]';
		$initArray['verify_html'] = false;
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'st_custom_editor_settings' );

//アイキャッチ画像関数化
//get_は出力先でechoすればいい
function my_get_thumbnail($t_id,$t_size) {
	$t_thumb = '';
	if(has_post_thumbnail($t_id)){
		$attr = array(
			'class' => '--thumbnail_height'
		);
		$t_thumb = get_the_post_thumbnail($t_id,$t_size,$attr);
	} else {
        $theme_root = get_stylesheet_directory_uri();
		$t_thumb = '<img src="'.$theme_root.'/images/post-thumbnail.jpg" alt="">';
	}
    return $t_thumb;
}


//導入事例タグ生成関数化
function my_get_roletag() {
    //$postは投稿に関するオブジェクト
    //termsオブジェクトの要素を$termに１つずつ順番に格納
    //$termはtermsオブジェクトの1配列が格納される
    $t_roletag = '';
    $t_terms = get_the_terms($post->ID, 'roletag');
    if ($t_terms) {
        foreach ( $t_terms as $t_term ) {
            $t_roletag = '<li>'.esc_html($t_term->name).'</li>';
            echo $t_roletag;
        }
    }
    return $t_roletag;
}


	
remove_filter('template_redirect', 'redirect_canonical');