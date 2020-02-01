<?php
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



// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init',function(){
    add_editor_style();
});