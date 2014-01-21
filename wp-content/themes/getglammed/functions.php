<?php	 		 	

// Nav menu
function register_my_menus() {
  register_nav_menus(
    array(
      'inside-menu' => __( 'Inside Menu' ),
      'outside-menu' => __( 'Outside Menu' ),
      'inspire-menu' => __( 'Inspiration Menu' ),
      'obsession-menu' => __( 'Obsession Menu' ),
      'life-menu' => __( 'Life Menu' ),
      'footer-left' => __( 'Footer Left'),
      'footer-center-left' => __( 'Footer Center Left'),
      'footer-center-right' => __( 'Footer Center Right'),
      'footer-right' => __( 'Footer Right')
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( 'your-theme', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
        require_once($locale_file);


// Get the page number
function get_page_number() {
    if (get_query_var('paged')) {
        print ' | ' . __( 'Page ' , 'your-theme') . get_query_var('paged');
    }
} // end get_page_number


// For category lists on category archives: Returns other categories except the current one (redundant)
function cats_meow($glue) {
        $current_cat = single_cat_title( '', false );
        $separator = "\n";
        $cats = explode( $separator, get_the_category_list($separator) );
        foreach ( $cats as $i => $str ) {
                if ( strstr( $str, ">$current_cat<" ) ) {
                        unset($cats[$i]);
                        break;
                }
        }
        if ( empty($cats) )
                return false;

        return trim(join( $glue, $cats ));
} // end cats_meow


// For tag lists on tag archives: Returns other tags except the current one (redundant)
function tag_ur_it($glue) {
        $current_tag = single_tag_title( '', '',  false );
        $separator = "\n";
        $tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
        foreach ( $tags as $i => $str ) {
                if ( strstr( $str, ">$current_tag<" ) ) {
                        unset($tags[$i]);
                        break;
                }
        }
        if ( empty($tags) )
                return false;

        return trim(join( $glue, $tags ));
} // end tag_ur_it


// Register widgetized areas
function theme_widgets_init() {
        // Area 1
  register_sidebar( array (
  'name' => 'Homepage Sidebar',
  'id' => 'primary_widget_area',
  'before_widget' => '<li id="%1$s" class="widget-container %2$s clearfix">',
  'after_widget' => '</li><div id="after-widget"></div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
  ) );

        // Area 2
  register_sidebar( array (
  'name' => 'Sidebar for Other Pages',
  'id' => 'secondary_widget_area', 
  'before_widget' => '<li id="%1$s" class="widget-container %2$s clearfix">',
  'after_widget' => '</li><div id="after-widget"></div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
  ) );
  
        // Area 3
  register_sidebar( array (
  'name' => 'Footer Left Widget',
  'id' => 'footer_widget_area', 
  'before_widget' => '<li id="%1$s" class="widget-container %2$s clearfix">',
  'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
  ) );
} // end theme_widgets_init

add_action( 'init', 'theme_widgets_init' );

// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
        $commenter = get_comment_author_link();
        if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
                $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
        } else {
                $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
        }
        $avatar_email = get_comment_author_email();
        $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 20 ) );
        echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link


// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
        $GLOBALS['comment_depth'] = $depth;
  ?>
        <li id="comment->
                <div class="comment-author vcard"></div>
                <div class="comment-meta"><?php	 		 	 printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'your-theme'),
                                        get_comment_date(),
                                        get_comment_time(),
                                        '#comment-' . get_comment_ID() );
                                        edit_comment_link(__('Edit', 'your-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
  
          <div class="comment-content">
                
                </div>
                <?php	 		 	 // echo the comment reply link
                        if($args['type'] == 'all' || get_comment_type() == 'comment') :
                                comment_reply_link(array_merge($args, array(
                                        'reply_text' => __('Reply','your-theme'), 
                                        'login_text' => __('Log in to reply.','your-theme'),
                                        'depth' => $depth,
                                        'before' => '<div class="comment-reply-link">', 
                                        'after' => '</div>'
                                )));
                        endif;
                ?>
<?php	 		 	 } // end custom_comments

// Excerpt length setting
function custom_excerpt_length( $length ) {
	return 19;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// end excerpt length



// Excerpt "read more"
function new_excerpt_more($more) {
       global $post;
	return ' <br /><a href="'. get_permalink($post->ID) . '">Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
// end "read more"


// Featured image
add_theme_support( 'post-thumbnails' );
// end Featured image

// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
                <li id="comment->
                        <div class="comment-author"><?php	 		 	 printf(__('By %1$s on %2$s at %3$s', 'your-theme'),
                                        get_comment_author_link(),
                                        get_comment_date(),
                                        get_comment_time() );
                                        edit_comment_link(__('Edit', 'your-theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
    
            <div class="comment-content">
                        
                        </div>
<?php	 		 	 } // end custom_pings
