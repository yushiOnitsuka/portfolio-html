<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>YUSHI ONITSUKA-portfolio</title>
		<meta name="description" content="webデザイナー　オニツカユウシのporfpolioです。">
		<meta name="keywords"  content="" />
		<meta property="og:title" content="YUSHI ONITSUKA-portfolio">
		<meta property="og:type" content="article"/>		
		<meta property="og:image" content="https://yushi-onitsuka.com/dist/img/ogp.jpg">
		<meta property="og:url" content="yushi-onitsuka.com/">
		<meta property="og:site_name" content="YUSHI ONITSUKA-portfolio">
        <meta property="og:description" content="webデザイナー　オニツカユウシのporfpolioです。">
        <meta property="fb:app_id" content="2567155006629538" />
        <meta name="twitter:site" content="@OnistukaYushi"/>
        <meta name="twitter:card" content="summary_large_image"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" />
        <!--css-->
        <link rel="stylesheet" type="text/css" href="/dist/css/reset.css">
        <link rel="stylesheet" href="https://use.typekit.net/jwl7hod.css">
		<link rel="stylesheet" type="text/css" href="/dist/css/style.css">
		<!--js-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="dist/js/jquery.matchHeight-min.js"></script>
        <script src="dist/js/slick.min.js"></script>
        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@id": "https://yushi-onitsuka.com/",
                        "name": "YUSHI ONITSUKA-portfolio"
                    }
                }
                ]
                }
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146405732-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146405732-1');
		</script>
		<?php wp_head(); ?>
	</head> 
<body>
    <div id="js-loader" class="c-loader u-zi_101"><span></span></div>
    <div class="c-cursor u-zi_99"><div><span></span><span></span><span></span></div></div>
    <div class="c-cursor--follower u-zi_98"></div>
    <header id="sns-header" class="u-zi_97">
        <ul class="l-sns">
            <li><a href="https://twitter.com/OnitsukaYushi" target="brank"><img src="<?php echo get_stylesheet_directory_uri(); ?>dist/img/sp_tw.png" alt="twitter"></a></li>
        </ul>
    </header>
    <header id="l-header" class="u-zi_97">
        <a href="/" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="YUSHI ONITSUKA"></a>
        <div id="l-nav">
            <div id="c-humberger" class="c-humberger">
                    <div><span></span></div>
                    <div><span></span></div>
                    <div><span></span></div>
            </div>
            <ul class="l-nav_list u-zi_-1">
                <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('/work')); ?>">WORK</a></li>
                <li><a href="mailto:contact&#64;yushi-onitsuka.com">CONTACT</a></li>
            </ul>
        </div>
        <ul class="l-sns">
            <li><a href="https://twitter.com/OnitsukaYushi" target="brank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/tw.png" alt="twitter"></a></li>
        </ul>
    </header>