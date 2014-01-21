<?php	 		 	
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.0
 * @author Arne Franken
 *
 * Delete Settings for settings page
 */
?>
<div id="poststuff">
  <div id="aio-favicon-delete_settings" class="postbox">
    <h3 id="delete_options"></h3>

    <div class="inside">
      <p></p>

      <form name="delete_settings" method="post" action="admin-post.php">
        
        <p id="submitbutton">
          <input type="hidden" name="action" value="aioFaviconDeleteSettings"/>
          <input type="submit" name="aioFaviconDeleteSettings" value=" &raquo;" class="button-secondary"/>
          <input type="checkbox" name="delete_settings-true"/>
        </p>
      </form>
    </div>
  </div>
</div>