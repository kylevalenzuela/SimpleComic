<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/myjquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/picturefill.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.infinitescroll.min.js"></script>
</head>

<body <?php body_class(); ?>>
	
	<nav>
		<div class="header-wrap">
				<a href="<?php echo get_option('home'); ?>/"><div class="header-logo">
					<span>[]</span>
				</div></a>
				
				<h5><?php bloginfo('description'); ?></h5>
				
				
		</div>

		<ul class="main-nav">
			<a href="http://localhost:8888/comics/"><li><span>a</span><h4>Past Comics</h4></li></a>
		</ul>

		<ul class="social-nav">
			<li><a href="https://twitter.com/kylevalenzuela">t</a></li>
		</ul>
		<footer><?php get_footer(); ?></footer>
	</nav>
	<div class="page-wrap">

		

