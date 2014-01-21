<?php if (is_home) { ?>

                <div id="primary" class="widget-area">
                        <ul class="sidebar">
                                <?php dynamic_sidebar('primary_widget_area'); ?>
                        </ul>
                </div><!-- #primary .widget-area -->
         
<?php	 }		 	 
        else { ?>

                <div id="secondary" class="widget-area">
                        <div class="side-nav">
                        <?php	 		 	 if(is_page(array("The Outside","The Face","The Body","Haircare","Makeup","Nails","Fashion","Fragrance"))) {
                                wp_nav_menu( array( 'theme_location' => 'outside-menu' ) );
                                } elseif(is_page(array("About","The Glam Squad","Our Mission","What is Get Glammed?"))) { ?>
                                <ul id="page-side-nav">
                                        <li><h2 class="topcat"><a href="/about/">About</a></h2>
                                        <!-- <ul class="subnav">
                                                <li><a href="/about/the-glam-squad/">The Glam Squad</a></li>
                                                <li><a href="/about/our-mission/">Our Mission</a></li>
                                                <li><a href="/about/what-is-get-glammed/">What is Get Glammed?</a></li>
                                        </ul> -->
                                        </li>
                                </ul>
                        <?php	 		 	 } elseif(is_page(array("The Life","DIY","Escapes","Food","Home","Wellness"))) {
                                wp_nav_menu( array( 'theme_location' => 'life-menu' ) );
                                } elseif(is_page(array("The Inspiration","Celeb Glam","Interviews"))) {
                                        wp_nav_menu( array( 'theme_location' => 'inspire-menu' ) );
                                } elseif(is_page(array("The Obsession"))) { 
                                        wp_nav_menu( array( 'theme_location' => 'obsession-menu' ) );
                                } elseif(is_page(array("The Inside","Advice","Health"))) {
                                wp_nav_menu( array( 'theme_location' => 'inside-menu' ) ); };
        
                        ?>
                </div>
                        <ul class="sidebar">
                               <?php dynamic_sidebar('secondary_widget_area'); ?> 
                        </ul>
                </div><!-- #secondary .widget-area -->
                <?php } ?>