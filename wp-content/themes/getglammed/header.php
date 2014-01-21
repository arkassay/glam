<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head profile="http://gmpg.org/xfn/11">
    <title><?php	 		 	
        if ( is_single() ) { single_post_title(); }      
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 <meta http-equiv="content-type" content="" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  

 <link rel="alternate" type="application/rss+xml" href="" />
 <link rel="alternate" type="application/rss+xml" href="" />
 <link rel="pingback" href="" />
</head>
<body>

<div id="outer-wrapper" class="hfeed">
 <div id="header">
    <div id="inner-wrapper">
  <div id="masthead">
   <div id="branding">
    <a href=""></a>
   </div><!– #branding –>
   <div id="access">
    <div class="skip-link"><a href="#content" title=""></a></div>
    <div id="menu">
    <?php	 	 wp_nav_menu( array( 'theme_location' => 'inside-menu' ) );
    wp_nav_menu( array( 'theme_location' => 'outside-menu' ) );
    wp_nav_menu( array( 'theme_location' => 'inspire-menu' ) );
    wp_nav_menu( array( 'theme_location' => 'obsession-menu' ) );
    wp_nav_menu( array( 'theme_location' => 'life-menu' ) );
    ?>
    </div>
   </div><!– #access –>
  </div><!– #masthead –>
    </div><!-- inner wrapper -->
 </div><!– #header –>
 <div id="inner-wrapper">
 <div id="main">