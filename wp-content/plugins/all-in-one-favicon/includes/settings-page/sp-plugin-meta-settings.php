<?php	 		 	
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.1
 * @author Arne Franken
 *
 * Meta Settings
 */
?>
<div id="aio-favicon-meta-settings" class="postbox">
    <h3 id="meta-settings"></h3>

    <div class="inside">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label for=":</label>
                </th>
                <td width="32"></td>
                <td>
                    <input type="checkbox" name="-removeReflectiveShine" value="true" <?php	 		 	 echo ($this->aioFaviconSettings['removeReflectiveShine'])
                        ? 'checked="checked"' : '';?>/>
                    <br/>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for=":</label>
                </th>
                <td width="32"></td>
                <td>
                    <input type="checkbox" name="-removeLinkFromMetaBox" value="true" <?php	 		 	 echo ($this->aioFaviconSettings['removeLinkFromMetaBox'])
                        ? 'checked="checked"' : '';?>/>
                    <br/>
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="hidden" name="action" value="aioFaviconUpdateSettings"/>
            <input type="submit" name="aioFaviconUpdateSettings" class="button-primary" value=""/>
        </p>
    </div>
</div>