<?php	 		 	 // This function displays the page content for the Smooth Slider Options submenu
function smooth_slider_create_multiple_sliders() {
global $smooth_slider;
?>

<div class="wrap" style="clear:both;">
                     <div style="margin:10px auto;clear:left;">
                        <a href="http://slidervilla.com/" title="Premium WordPress Slider Plugins" target="_blank"><img src="" alt="Premium WordPress Slider Plugins" /></a>
                     </div>
<h2 style="float:left;"></h2>
<form  style="float:left;" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8046056">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<?php	 		 	 
if ($_POST['remove_posts_slider']) {
   if ( $_POST['slider_posts'] ) {
       global $wpdb, $table_prefix;
       $table_name = $table_prefix.SLIDER_TABLE;
	   $current_slider = $_POST['current_slider_id'];
	   foreach ( $_POST['slider_posts'] as $post_id=>$val ) {
		   $sql = "DELETE FROM $table_name WHERE post_id = '$post_id' AND slider_id = '$current_slider' LIMIT 1";
		   $wpdb->query($sql);
	   }
   }
   if ($_POST['remove_all'] == __('Remove All at Once','smooth-slider')) {
       global $wpdb, $table_prefix;
       $table_name = $table_prefix.SLIDER_TABLE;
	   $current_slider = $_POST['current_slider_id'];
	   if(is_slider_on_slider_table($current_slider)) {
		   $sql = "DELETE FROM $table_name WHERE slider_id = '$current_slider';";
		   $wpdb->query($sql);
	   }
   }
   if ($_POST['remove_all'] == __('Delete Slider','smooth-slider')) {
       $slider_id = $_POST['current_slider_id'];
       global $wpdb, $table_prefix;
       $slider_table = $table_prefix.SLIDER_TABLE;
       $slider_meta = $table_prefix.SLIDER_META;
	   $slider_postmeta = $table_prefix.SLIDER_POST_META;
	   if(is_slider_on_slider_table($slider_id)) {
		   $sql = "DELETE FROM $slider_table WHERE slider_id = '$slider_id';";
		   $wpdb->query($sql);
	   }
	   if(is_slider_on_meta_table($slider_id)) {
		   $sql = "DELETE FROM $slider_meta WHERE slider_id = '$slider_id';";
		   $wpdb->query($sql);
	   }
	   if(is_slider_on_postmeta_table($slider_id)) {
		   $sql = "DELETE FROM $slider_postmeta WHERE slider_id = '$slider_id';";
		   $wpdb->query($sql);
	   }
   }
}
if ($_POST['create_new_slider']) {
   $slider_name = $_POST['new_slider_name'];
   global $wpdb,$table_prefix;
   $slider_meta = $table_prefix.SLIDER_META;
   $sql = "INSERT INTO $slider_meta (slider_name) VALUES('$slider_name');";
   $result = $wpdb->query($sql);
}
if ($_POST['reorder_posts_slider']) {
   $i=1;
   global $wpdb, $table_prefix;
   $table_name = $table_prefix.SLIDER_TABLE;
   foreach ($_POST['order'] as $slide_order) {
    $slide_order = intval($slide_order);
    $sql = 'UPDATE '.$table_name.' SET slide_order='.$i.' WHERE post_id='.$slide_order.'';
    $wpdb->query($sql);
    $i++;
  }
}
?>
<div style="clear:both"></div>

<a href="</a>


<div id="slider_tabs">
        <ul class="ui-tabs">
        
            <li><a href="#tabs-</a></li>
        
        
            <li><a href="#new_slider"></a></li>
        
        </ul>


<div id="tabs-">
<form action="" method="post">


<input type="hidden" name="remove_posts_slider" value="1" />
<div id="tabs-">
<h3>)</h3>
<p><em>.</em></p>

    <table class="widefat">
    <thead><tr><th></th></tr></thead><tbody>

<?php	 		 	  
	/*global $wpdb, $table_prefix;
	$table_name = $table_prefix.SLIDER_TABLE;*/
	$slider_id = $slider['slider_id'];
	//$slider_posts = $wpdb->get_results("SELECT post_id FROM $table_name WHERE slider_id = '$slider_id'", OBJECT); 
    $slider_posts=get_slider_posts_in_order($slider_id); ?>
	
    <input type="hidden" name="current_slider_id" value="" />
    
<?php	 		 	    $count = 0;	
	foreach($slider_posts as $slider_post) {
	  $slider_arr[] = $slider_post->post_id;
	  $post = get_post($slider_post->post_id);	  
	  if ( in_array($post->ID, $slider_arr) ) {
		  $count++;
		  $sslider_author = get_userdata($post->post_author);
          $sslider_author_dname = $sslider_author->display_name;
		  echo '<tr' . ($count % 2 ? ' class="alternate"' : '') . '><td><strong>' . $post->post_title . '</strong><a href="'.get_edit_post_link( $post->ID, $context = 'display' ).'" target="_blank"> '.__( '(Edit)', 'smooth-slider' ).'</a> <a href="'.get_permalink( $post->ID ).'" target="_blank"> '.__( '(View)', 'smooth-slider' ).' </a></td><td>By ' . $sslider_author_dname . '</td><td>' . date('l, F j. Y',strtotime($post->post_date)) . '</td><td><input type="checkbox" name="slider_posts[' . $post->ID . ']" value="1" /></td></tr>'; 
	  }
	}
		
	if ($count == 0) {
		echo '<tr><td colspan="4">'.__( 'No posts/pages have been added to the Slider - You can add respective post/page to slider on the Edit screen for that Post/Page', 'smooth-slider' ).'</td></tr>';
	}
	echo '</tbody><tfoot><tr><th>'.__( 'Post/Page Title', 'smooth-slider' ).'</th><th>'.__( 'Author', 'smooth-slider' ).'</th><th>'.__( 'Post Date', 'smooth-slider' ).'</th><th>'.__( 'Remove Post', 'smooth-slider' ).'</th></tr></tfoot></table>'; 
    
	echo '<div class="submit">';
	
	if ($count) {echo '<input type="submit" value="'.__( 'Remove Selected', 'smooth-slider' ).'" onclick="return confirmRemove()" /><input type="submit" name="remove_all" value="'.__( 'Remove All at Once', 'smooth-slider' ).'" onclick="return confirmRemoveAll()" />';}
	
	if($slider_id != '1') {
	   echo '<input type="submit" value="'.__( 'Delete Slider', 'smooth-slider' ).'" name="remove_all" onclick="return confirmSliderDelete()" />';
	}
	
	echo '</div>';
?>    
    </tbody></table>
 </form>
 
 
 <form action="" method="post">
    <input type="hidden" name="reorder_posts_slider" value="1" />
    <h3>)</h3>
    <p><em> </em></p>
    <ul id="sslider_sortable_" style="color:#326078">    
    <?php	 		 	  
    /*global $wpdb, $table_prefix;
	$table_name = $table_prefix.SLIDER_TABLE;*/
	$slider_id = $slider['slider_id'];
	//$slider_posts = $wpdb->get_results("SELECT post_id FROM $table_name WHERE slider_id = '$slider_id'", OBJECT); 
    $slider_posts=get_slider_posts_in_order($slider_id);?>
        
        <input type="hidden" name="current_slider_id" value="" />
        
    <?php	 		 	    $count = 0;	
        foreach($slider_posts as $slider_post) {
          $slider_arr[] = $slider_post->post_id;
          $post = get_post($slider_post->post_id);	  
          if ( in_array($post->ID, $slider_arr) ) {
              $count++;
              $sslider_author = get_userdata($post->post_author);
              $sslider_author_dname = $sslider_author->display_name;
              echo '<li id="'.$post->ID.'"><input type="hidden" name="order[]" value="'.$post->ID.'" /><strong> &raquo; &nbsp; ' . $post->post_title . '</strong></li>'; 
          }
        }
            
        if ($count == 0) {
            echo '<li>'.__( 'No posts/pages have been added to the Slider - You can add respective post/page to slider on the Edit screen for that Post/Page', 'smooth-slider' ).'</li>';
        }
		        
        echo '</ul><div class="submit">';
        
        if ($count) {echo '<input type="submit" value="Save the order"  />';}
                
        echo '</div>';
    ?>    
       </div>       
  </form>
</div> 
 



    <div id="new_slider">
    <form action="" method="post" onsubmit="return slider_checkform(this);" >
    <h3></h3>
    <input type="hidden" name="create_new_slider" value="1" />
    
    <input name="new_slider_name" class="regular-text code" value="" style="clear:both;" />
    
    <div class="submit"><input type="submit" value="" name="create_new" /></div>
    
    </form>
    </div>
 
</div>

<div style="margin:10px auto;clear:left;">
                        <a href="http://slidervilla.com/" title="Premium WordPress Slider Plugins" target="_blank"><img src="" alt="Premium WordPress Slider Plugins" /></a>
</div>

<div id="poststuff" class="metabox-holder has-right-sidebar"> 
		<div id="side-info-column" class="inner-sidebar" style="float:left;"> 
			<div class="postbox"> 
			  <h3 class="hndle"><span></span></h3> 
			  <div class="inside">
                <ul>
                <li><a href="http://slidervilla.com/smooth-slider" title="</a></li>
                <li><a href="http://clickonf5.com/" title="
" ></a></li>
                <li><a href="http://keencodes.com/" title="</a></li>
				<li><a href="http://www.clickonf5.org" title="
" ></a></li>
                <li><a href="http://www.clickonf5.org/go/smooth-slider/" title="</a></li>
                </ul> 
              </div> 
			</div> 
		</div>
     
        <div id="side-info-column" class="inner-sidebar" style="float:left;margin-left:1em"> 
			<div class="postbox"> 
			  <h3 class="hndle"><span></span></h3> 
			  <div class="inside">
               <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fslidervilla&amp;width=270&amp;height=170&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=140253496056337" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:170px;" allowTransparency="true"></iframe>
              </div> 
			</div> 
		</div>
          
		<div id="side-info-column" style="float:left;margin-left:1em;width:325px;"> 
		<div class="postbox"> 
		  <h3 class="hndle"><span></span></h3> 
		  <div class="inside">
				 <div style="margin:10px 5px">
					<a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank"><img src="" alt="Recommended WordPress Themes" /></a>
					<p><a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank">Elegant Themes</a> are attractive, compatible, affordable, SEO optimized WordPress Themes and have best support in community.</p>
					<p><strong>Beautiful themes, Great support!</strong></p>
					<p><a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank">For more info visit ElegantThemes</a></p>
				 </div>
		   </div></div></div>
     
     <div style="clear:left;"></div>
 </div> <!--end of poststuff --> 


</div> <!--end of float wrap -->
<?php	 		 		
}
?>