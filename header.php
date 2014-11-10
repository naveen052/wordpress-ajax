<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <script src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/jquery.js"></script>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
  <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/css/style.css" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Roboto:500,400italic,300,400' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/nprogress.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/jquery.history.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/scripts.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/wordpress-ajax/assets/js/masonry.pkgd.min.js"></script>

</head>

<body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-5 navigation">
            <nav class="right">
            <a href="#">Something</a>
            <a href="#">Something</a>
            <a href="#">Something</a>  
          </nav>
          </div>
          <div class="col-md-2 centered">
            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2014/11/logo.png" alt="" /></a> 
          </div>
          <div class="col-md-5 navigation">
            <nav class="left">              
              <a href="#">Something</a>
              <a href="#">Something</a>
              <a href="#">Something</a>
            </nav>     
          </div>
        </div>
      </div>
    </header>
    <div class="container">