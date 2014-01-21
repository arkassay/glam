<?php	 		 	 // Hook for adding admin menus
if ( is_admin() ){ // admin actions
  add_action('admin_menu', 'smooth_slider_settings');
  add_action( 'admin_init', 'register_mysettings' ); 
} 

// function for adding settings page to wp-admin
function smooth_slider_settings() {
	add_menu_page( 'Smooth Slider', 'Smooth Slider', 'manage_options','smooth-slider-admin', 'smooth_slider_create_multiple_sliders', smooth_slider_plugin_url( 'images/smooth_slider_icon.gif' ) );
	add_submenu_page('smooth-slider-admin', 'Smooth Sliders', 'Sliders', 'manage_options', 'smooth-slider-admin', 'smooth_slider_create_multiple_sliders');
	add_submenu_page('smooth-slider-admin', 'Smooth Slider Settings', 'Settings', 'manage_options', 'smooth-slider-settings', 'smooth_slider_settings_page');
}
include('sliders.php');
// This function displays the page content for the Smooth Slider Options submenu
function smooth_slider_settings_page() {
global $smooth_slider; ?>

<div class="wrap" style="clear:both;">
<h2>&nbsp;</h2>
<h2 style="float:left;"></h3>
<form  style="float:left;margin-left:2em;" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8046056">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<button class="button-primary"><a style="color:#fff;text-decoration:none;" href="</a></button>

<h2 style="clear:left"></h2> 
<div>
<?php	 		 	 
get_smooth_slider();
?> </div>

<div id="poststuff" class="metabox-holder has-right-sidebar" style="float:right;width:28%;"> 
            <div class="postbox"> 
     		  <div class="inside">

            <div style="margin:10px auto;">
                        <a href="http://slidervilla.com/" title="Premium WordPress Slider Plugins" target="_blank"><img src="" alt="Premium WordPress Slider Plugins" /></a>
            </div>
            </div></div>
                
			<div class="postbox"> 
			  <h3 class="hndle"><span></span></h3> 
			  <div class="inside">
                <ul>
                <li><a href="http://slidervilla.com/smooth-slider" title="</a></li>
                <li><a href="http://keencodes.com/" title="</a></li>
				<li><a href="http://www.clickonf5.org" title="
" ></a></li>
                <li><a href="http://www.clickonf5.org/go/smooth-slider/" title="</a></li>
                </ul> 
              </div> 
			</div> 
     
			<div class="postbox"> 
			  <h3 class="hndle"><span></span></h3> 
			  <div class="inside">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fslidervilla&amp;width=270&amp;height=170&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=140253496056337" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:170px;" allowTransparency="true"></iframe>
              </div> 
			</div> 
     
     		<div class="postbox"> 
			  <h3 class="hndle"><span></span></h3> 
			  <div class="inside">
                     <div style="margin:10px 5px">
                        <a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank"><img src="" alt="Recommended WordPress Themes" /></a>
                        <p><a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank">Elegant Themes</a> are attractive, compatible, affordable, SEO optimized WordPress Themes and have best support in community.</p>
                        <p><strong>Beautiful themes, Great support!</strong></p>
                        <p><a href="http://slidervilla.com/go/elegantthemes/" title="Recommended WordPress Themes" target="_blank">For more info visit ElegantThemes</a></p>
                     </div>
               </div></div>

 </div> <!--end of poststuff --> 

<form method="post" action="options.php" id="smooth_slider_form">

<div style="float:left;width:70%;">
<div id="slider_tabs">
        <ul class="ui-tabs">
            <li style="font-weight:bold;font-size:12px;"><a href="#basic">Basic Settings</a></li>
            <li style="font-weight:bold;font-size:12px;"><a href="#slides">Slides Panel</a></li>
			<li style="font-weight:bold;font-size:12px;"><a href="#responsive">Responsiveness</a></li>
			<li style="font-weight:bold;font-size:12px;"><a href="#cssvalues">Generated CSS</a></li>
        </ul>

<div id="basic">
<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<table class="form-table">

<tr valign="top">
<th scope="row"><label for="smooth_slider_autostep"></label></th>
<td> 
<input name="smooth_slider_options[autostep]" type="checkbox" id="smooth_slider_autostep" value="1"  /> 
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[fx]" >
<option value="scrollHorz" </option>
<option value="scrollVert" </option>
<option value="turnUp" </option>
<option value="turnDown" </option>
<option value="fade" </option>
<option value="uncover" </option>
</select>
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[speed]" id="smooth_slider_speed" class="small-text" value=" 
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[transition]" id="smooth_slider_transition" class="small-text" value="</small>
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[no_posts]" id="smooth_slider_no_posts" class="small-text" value="" />
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[bg_color]" id="color_value_1" value="" /><div class="color-picker-wrap" id="colorbox_1"></div> &nbsp; &nbsp; &nbsp; 
<label for="smooth_slider_bg"><input name="smooth_slider_options[bg]" type="checkbox" id="smooth_slider_bg" value="1" </label> </td>
</tr>
 
<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[height]" id="smooth_slider_height" class="small-text" value="</td>
</tr>


<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[width]" id="smooth_slider_width" class="small-text" value="</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[border]" id="smooth_slider_border" class="small-text" value="" />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[brcolor]" id="color_value_6" value="" /><div class="color-picker-wrap" id="colorbox_6"></div></td>
</tr>

<tr valign="top"> 
<th scope="row"></th> 
<td><fieldset><legend class="screen-reader-text"><span></span></legend> 
<label for="smooth_slider_prev_next"> 
<input name="smooth_slider_options[prev_next]" type="checkbox" id="smooth_slider_prev_next" value="1"  /> 
 </label><br /> 
<label for="smooth_slider_goto_slide"></label><br />
<input name="smooth_slider_options[goto_slide]" type="radio" id="smooth_slider_goto_slide" value="0" <br /> 
<input name="smooth_slider_options[goto_slide]" type="radio" id="smooth_slider_goto_slide" value="1"  <br /> 
<input name="smooth_slider_options[goto_slide]" type="radio" id="smooth_slider_goto_slide" value="2" <br /> 
<input name="smooth_slider_options[goto_slide]" type="radio" id="smooth_slider_goto_slide" value="3"   
<input type="text" name="smooth_slider_options[custom_nav]" class="regular-text code" value="" />
</fieldset></td> 
</tr> 

</table>
<p class="submit">
<input type="submit" class="button-primary" value="" />
</p>
</div>

<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 

<table class="form-table">

<tr valign="top" >
<th scope="row"></th>
<td><select name="smooth_slider_options[support]" >
<option value="1" </option>
<option value="0" </option>
</select>
<small></small>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[allowable_tags]" class="regular-text code" value="" />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	)
	</div>
</span>
</td>
</tr>
<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[more]" class="regular-text code" value="" /></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[user_level]" >
<option value="manage_options" </option>
<option value="edit_others_posts" </option>
<option value="publish_posts" </option>
<option value="edit_posts" </option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input name="smooth_slider_options[rand]" type="checkbox" value="1"   />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[noscript]" class="regular-text code" value="" /></td>
</tr>

<tr valign="top" style="display:none;">
<th scope="row"></th>
<td><input name="smooth_slider_options[shortcode]" type="checkbox" value="1" </td>
</tr>

<tr valign="top">
<th scope="row"></small></th>
<td><select name="smooth_slider_options[stylesheet]" >
<?php	 		 	 
$directory = SMOOTH_SLIDER_CSS_DIR;
if ($handle = opendir($directory)) {
    while (false !== ($file = readdir($handle))) { 
     if($file != '.' and $file != '..') { ?>
      <option value="</option>
 <?php	 		 	  } }
    closedir($handle);
}
?>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><label for="smooth_slider_multiple"> 
<input name="smooth_slider_options[multiple_sliders]" type="checkbox" id="smooth_slider_multiple" value="1"  /> 
 </label></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input name="smooth_slider_options[fouc]" type="checkbox" value="1"   />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><textarea name="smooth_slider_options[css]"  rows="5" cols="50" class="regular-text code"></textarea>
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	
	</div>
</span>
</td>
</tr>

</table>
</div>

</div><!--#basics-->

<div id="slides">
<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<p></p> 
<table class="form-table">

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[title_text]" id="smooth_slider_title_text" value="" /></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[title_from]" >
<option value="0" </option>
<option value="1" </option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[title_font]" id="smooth_slider_title_font" >
<option value="Arial,Helvetica,sans-serif"  >Arial,Helvetica,sans-serif</option>
<option value="Verdana,Geneva,sans-serif"  >Verdana,Geneva,sans-serif</option>
<option value="Tahoma,Geneva,sans-serif"  >Tahoma,Geneva,sans-serif</option>
<option value="Trebuchet MS,sans-serif"  >Trebuchet MS,sans-serif</option>
<option value="'Century Gothic','Avant Garde',sans-serif"  >'Century Gothic','Avant Garde',sans-serif</option>
<option value="'Arial Narrow',sans-serif"  >'Arial Narrow',sans-serif</option>
<option value="'Arial Black',sans-serif"  >'Arial Black',sans-serif</option>
<option value="'Gills Sans MT','Gills Sans',sans-serif"  >'Gills Sans MT','Gills Sans',sans-serif</option>
<option value="'Times New Roman',Times,serif"  >'Times New Roman',Times,serif</option>
<option value="Georgia,serif"  >Georgia,serif</option>
<option value="Garamond,serif"  >Garamond,serif</option>
<option value="'Century Schoolbook','New Century Schoolbook',serif"  >'Century Schoolbook','New Century Schoolbook',serif</option>
<option value="'Bookman Old Style',Bookman,serif"  >'Bookman Old Style',Bookman,serif</option>
<option value="'Comic Sans MS',cursive"  >'Comic Sans MS',cursive</option>
<option value="'Courier New',Courier,monospace"  >'Courier New',Courier,monospace</option>
<option value="'Copperplate Gothic Bold',Copperplate,fantasy"  >'Copperplate Gothic Bold',Copperplate,fantasy</option>
<option value="Impact,fantasy"  >Impact,fantasy</option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[title_fcolor]" id="color_value_2" value="" /><div class="color-picker-wrap" id="colorbox_2"></div></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[title_fsize]" id="smooth_slider_title_fsize" class="small-text" value="</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[title_fstyle]" id="smooth_slider_title_fstyle" >
<option value="bold" </option>
<option value="bold italic" </option>
<option value="italic" </option>
<option value="normal" </option>
</select>
</td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary" value="" />
</p>
</div>

<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<p></p> 
<table class="form-table">

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[ptitle_font]" id="smooth_slider_ptitle_font" >
<option value="Arial,Helvetica,sans-serif"  >Arial,Helvetica,sans-serif</option>
<option value="Verdana,Geneva,sans-serif"  >Verdana,Geneva,sans-serif</option>
<option value="Tahoma,Geneva,sans-serif"  >Tahoma,Geneva,sans-serif</option>
<option value="Trebuchet MS,sans-serif"  >Trebuchet MS,sans-serif</option>
<option value="'Century Gothic','Avant Garde',sans-serif"  >'Century Gothic','Avant Garde',sans-serif</option>
<option value="'Arial Narrow',sans-serif"  >'Arial Narrow',sans-serif</option>
<option value="'Arial Black',sans-serif"  >'Arial Black',sans-serif</option>
<option value="'Gills Sans MT','Gills Sans',sans-serif"  >'Gills Sans MT','Gills Sans',sans-serif</option>
<option value="'Times New Roman',Times,serif"  >'Times New Roman',Times,serif</option>
<option value="Georgia,serif"  >Georgia,serif</option>
<option value="Garamond,serif"  >Garamond,serif</option>
<option value="'Century Schoolbook','New Century Schoolbook',serif"  >'Century Schoolbook','New Century Schoolbook',serif</option>
<option value="'Bookman Old Style',Bookman,serif"  >'Bookman Old Style',Bookman,serif</option>
<option value="'Comic Sans MS',cursive"  >'Comic Sans MS',cursive</option>
<option value="'Courier New',Courier,monospace"  >'Courier New',Courier,monospace</option>
<option value="'Copperplate Gothic Bold',Copperplate,fantasy"  >'Copperplate Gothic Bold',Copperplate,fantasy</option>
<option value="Impact,fantasy"  >Impact,fantasy</option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[ptitle_fcolor]" id="color_value_3" value="" /><div class="color-picker-wrap" id="colorbox_3"></div></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[ptitle_fsize]" id="smooth_slider_ptitle_fsize" class="small-text" value="</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[ptitle_fstyle]" id="smooth_slider_ptitle_fstyle" >
<option value="bold" </option>
<option value="bold italic" </option>
<option value="italic" </option>
<option value="normal" </option>
</select>
</td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary" value="" />
</p>
</div>

<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<p></p> 
<table class="form-table">

<tr valign="top"> 
<th scope="row"></small></th> 
<td><fieldset><legend class="screen-reader-text"><span></small> </span></legend> 
<input name="smooth_slider_options[img_pick][0]" type="checkbox" value="1"  &nbsp; &nbsp; 
<input type="text" name="smooth_slider_options[img_pick][1]" class="text" value="
<br />
<input name="smooth_slider_options[img_pick][2]" type="checkbox" value="1" &nbsp; <br />
<input name="smooth_slider_options[img_pick][3]" type="checkbox" value="1"  &nbsp; &nbsp; 
<input type="text" name="smooth_slider_options[img_pick][4]" class="small-text" value=" &nbsp; <br />
<input name="smooth_slider_options[img_pick][5]" type="checkbox" value="1" &nbsp; 
</fieldset></td> 
</tr> 

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[img_align]" id="smooth_slider_img_align" >
<option value="left" </option>
<option value="right" </option>
<option value="none" </option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row">
</th>
<td><select name="smooth_slider_options[crop]" id="smooth_slider_img_crop" >
<option value="0" </option>
<option value="1" </option>
<option value="2" </option>
<option value="3" </option>
</select>
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	
	</div>
</span>

</td>
</tr>


<tr valign="top"> 
<th scope="row"></th> 
<td><fieldset><legend class="screen-reader-text"><span></span></legend> 
<input name="smooth_slider_options[img_size]" type="radio" value="0"  
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
<br />
<input name="smooth_slider_options[img_size]" type="radio" value="1" &nbsp; 
<label for="smooth_slider_options[img_width]"></label>
<input type="text" name="smooth_slider_options[img_width]" class="small-text" value=" &nbsp;&nbsp; 
</fieldset></td> 
</tr> 

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[img_height]" class="small-text" value="
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[img_border]" id="smooth_slider_img_border" class="small-text" value="" />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[img_brcolor]" id="color_value_4" value="" /><div class="color-picker-wrap" id="colorbox_4"></div></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input name="smooth_slider_options[image_only]" type="checkbox" value="1"   />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>
</table>

<p class="submit">
<input type="submit" class="button-primary" value="" />
</p>

</div>

<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<p></p> 
<table class="form-table">
<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[content_font]" id="smooth_slider_content_font" >
<option value="Arial,Helvetica,sans-serif"  >Arial,Helvetica,sans-serif</option>
<option value="Verdana,Geneva,sans-serif"  >Verdana,Geneva,sans-serif</option>
<option value="Tahoma,Geneva,sans-serif"  >Tahoma,Geneva,sans-serif</option>
<option value="Trebuchet MS,sans-serif"  >Trebuchet MS,sans-serif</option>
<option value="'Century Gothic','Avant Garde',sans-serif"  >'Century Gothic','Avant Garde',sans-serif</option>
<option value="'Arial Narrow',sans-serif"  >'Arial Narrow',sans-serif</option>
<option value="'Arial Black',sans-serif"  >'Arial Black',sans-serif</option>
<option value="'Gills Sans MT','Gills Sans',sans-serif"  >'Gills Sans MT','Gills Sans',sans-serif</option>
<option value="'Times New Roman',Times,serif"  >'Times New Roman',Times,serif</option>
<option value="Georgia,serif"  >Georgia,serif</option>
<option value="Garamond,serif"  >Garamond,serif</option>
<option value="'Century Schoolbook','New Century Schoolbook',serif"  >'Century Schoolbook','New Century Schoolbook',serif</option>
<option value="'Bookman Old Style',Bookman,serif"  >'Bookman Old Style',Bookman,serif</option>
<option value="'Comic Sans MS',cursive"  >'Comic Sans MS',cursive</option>
<option value="'Courier New',Courier,monospace"  >'Courier New',Courier,monospace</option>
<option value="'Copperplate Gothic Bold',Copperplate,fantasy"  >'Copperplate Gothic Bold',Copperplate,fantasy</option>
<option value="Impact,fantasy"  >Impact,fantasy</option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[content_fcolor]" id="color_value_5" value="" /><div class="color-picker-wrap" id="colorbox_5"></div></td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[content_fsize]" id="smooth_slider_content_fsize" class="small-text" value="</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[content_fstyle]" id="smooth_slider_content_fstyle" >
<option value="bold" </option>
<option value="bold italic" </option>
<option value="italic" </option>
<option value="normal" </option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><select name="smooth_slider_options[content_from]" id="smooth_slider_content_from" >
<option value="slider_content" </option>
<option value="excerpt" </option>
<option value="content" </option>
</select>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[content_limit]" id="smooth_slider_content_limit" class="small-text" value="" />
<span class="moreInfo">
	&nbsp; <span class="trigger"> ? </span>
	<div class="tooltip">
	 
	</div>
</span>
</td>
</tr>

<tr valign="top">
<th scope="row"></th>
<td><input type="text" name="smooth_slider_options[content_chars]" id="smooth_slider_content_chars" class="small-text" value=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
</tr>

</table>
</div>

</div><!--#slides-->

<div id="responsive">
<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 

<table class="form-table">
<tr valign="top">
<th scope="row"></th>
<td><input name="smooth_slider_options[responsive]" type="checkbox" value="1" </td>
</tr>
</table>
</div>

</div> <!--#responsive-->

<div id="cssvalues">
<div style="border:1px solid #ccc;padding:10px;background:#fff;margin:10px 0">
<h2></h2> 
<p></p> 

<div style="font-family:monospace;font-size:13px;background:#ddd;">
.smooth_slider{} <br />
.smooth_slider .sldr_title{} <br />
.smooth_slider .smooth_slideri{} <br />
.smooth_slider .smooth_slider_thumbnail{} <br />
.smooth_slider .smooth_slideri h2{} <br />
.smooth_slider .smooth_slideri h2 a{} <br />
.smooth_slider .smooth_slideri span{} <br />
.smooth_slider .smooth_slideri p.more{} <br />
.smooth_slider .smooth_next{} <br />
.smooth_slider .smooth_prev{} 
</div>
</div>
</div> <!--#cssvalues-->

</div> <!--end of #slider_tabs-->

<p class="submit">
<input type="submit" class="button-primary" value="" />
</p>
</div> <!--end of float left -->
</form>

                     <div style="margin:10px auto;clear:left;">
                        <a href="http://slidervilla.com/" title="Premium WordPress Slider Plugins" target="_blank"><img src="" alt="Premium WordPress Slider Plugins" /></a>
                     </div>


</div> <!--end of float wrap -->


<?php	 		 		
}
function register_mysettings() { // whitelist options
  register_setting( 'smooth-slider-group', 'smooth_slider_options' );
}
?>