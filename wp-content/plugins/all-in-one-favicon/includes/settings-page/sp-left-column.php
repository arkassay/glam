<?php	 		 	
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.0
 * @author Arne Franken
 *
 * Left column for settings page
 */
?>
<div class="postbox-container" style="width: 69%;">
    <form id="aio-favicon-settings-update" name="aio-favicon-settings-update" enctype="multipart/form-data" method="post" action="admin-post.php">
      
      <input type='hidden' value="" name="option_page"/>

    <div id="poststuff">
<?php	 		 	

      //TODO: still not ideal - since all settings page files are just "HTML templates" there is currently no clean way to handle DRY.

      //set values for frontend favicon-settings-box
      $this->faviconMap = $this->faviconFrontendMap;
      $this->identifier = AIOFAVICON_FRONTEND;
      $this->translatedIdentifier = __('Frontend', AIOFAVICON_TEXTDOMAIN);
      require 'sp-plugin-favicon-settings.php';

      //set values for backend favicon-settings-box
      $this->faviconMap = $this->faviconBackendMap;
      $this->identifier = AIOFAVICON_BACKEND;
      $this->translatedIdentifier = __('Backend', AIOFAVICON_TEXTDOMAIN);
      require 'sp-plugin-favicon-settings.php';

      require_once 'sp-plugin-meta-settings.php';
    ?>
    </div>
  </form>

<?php	 		 	
    require_once 'sp-tipps-box.php';
    require_once 'sp-delete-settings.php';
  ?>
</div>