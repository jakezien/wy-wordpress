<?php?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://fonts.googleapis.com/css?family=Gentium+Basic:400,700|Gentium+Book+Basic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//f.fontdeck.com/s/css/zH28mslJNSfrEtk/N8vkA5GMvEQ/willkayachay/28178.css" type="text/css" />
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		var templateDir = "<?php bloginfo('template_directory') ?>";
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header></header>
