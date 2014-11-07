<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <script src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/jquery.js"></script>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/css/style.css" />
  <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/css/nprogress.css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
   <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic' rel='stylesheet' type='text/css'>	-->
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php
    wp_get_archives('type=monthly&format=link');
    wp_head();
  ?>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/nprogress.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/jquery.history.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/scripts.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/masonry.pkgd.min.js"></script>

</head>

<body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php
              // see this theme's functions.php
              print do_heading();
              print naked_nav($post);
            ?>
          </div>
        </div>
      </div>
    </header>

    <div class="container">