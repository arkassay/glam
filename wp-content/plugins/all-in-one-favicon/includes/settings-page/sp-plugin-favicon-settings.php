<?php	 		 	
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.1
 * @author Arne Franken
 *
 * Frontend Favicon Settings
 */
?>
<div id="aio-favicon--settings" class="postbox">
    <h3 id="</h3>

    <div class="inside">
        <table class="form-table">
<?php	 		 	
          // Loop over this list of icons.
          foreach ($this->faviconMap as $iconName => $iconType) { ?>
            <tr>
                <th scope="row">
                    <label for=":</label>
                </th>
                <td width="32">
                    <div id="-favicon"></div>
                </td>
                <td>
                    <!-- text input field so URLs may be copy'n'pasted -->
                    <input id=""/>
                    <!-- label for file input, is displayed as upload button. All browsers then trigger file upload but Mozilla, see aiofavicon.js for workaround. -->
                    <label id="</label>
                    <br />
                    <?php	 		 	 //only display delete checkbox if a favicon was found.
                    if(!empty($this->aioFaviconSettings[$iconName])) { ?>
                    <input type="checkbox" name="delete-
                    
                    <!-- input is hidden with width:0 and opacity:0 because some browsers will not display the file upload dialog if it's hidden with display:none -->
                    <input id="" style="width: 0; opacity: 0;"/>
                </td>
            </tr>
          
        </table>
        <p class="submit">
            <input type="hidden" name="action" value="aioFaviconUpdateSettings"/>
            <input type="submit" name="aioFaviconUpdateSettings" class="button-primary" value=""/>
        </p>
    </div>
</div>