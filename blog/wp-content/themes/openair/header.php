<!DOCTYPE html PUBLIC 
    "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="keywords" content="blog," />
  <meta name="description" content="" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

  <title>
    <?php bloginfo('name'); ?>
	<?php if (is_category()) { ?>
	  <?php wp_title(' :: '); ?> category ::
	<?php } else { ?>
	  <?php wp_title(' :: '); ?> ::
	<?php } ?>
    <?php bloginfo('url'); ?>
  </title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); // off by default ?>
  <?php  if (is_singular()) wp_enqueue_script('comment-reply'); ?>
  <?php wp_head(); ?>
</head>

<body>
  <div id="wrap">
    <div id="header">
	  <div id="text">
	    <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2 class="description" id="tagline"><?php echo bloginfo('description'); ?></h2>
	  </div>
    </div>
	