<?php	 		 	
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.0
 * @author Arne Franken
 *
 * Donate-Box for settings page
 */
?>
<div id="poststuff">
  <div id="aio-favicon-donate" class="postbox">
    <h3 id="donate"></h3>

    <div class="inside">
      <p>
        
      </p>

      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_xclick"/>
        <input type="hidden" name="business" value="G75G3Z6PQWXXQ"/>
        <input type="hidden" name="item_name" value=""/>
        <input type="hidden" name="item_number" value=""/>
        <input type="hidden" name="no_shipping" value="0"/>
        <input type="hidden" name="no_note" value="0"/>
        <input type="hidden" name="cn" value="."/>
        <input type="hidden" name="return" value=""/>
        <input type="hidden" name="cbt" value=""/>
        <input type="hidden" name="currency_code" value="USD"/>
        <input type="hidden" name="lc" value="US"/>
        <input type="hidden" name="bn" value="PP-DonationsBF"/>
        <label for="preset-amounts"></label>
        <select name="amount" id="preset-amounts">
          <option value="10">10</option>
          <option value="20" selected>20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select><span></span>
        <br/><br/><br/><br/>
        <label for="custom-amounts"></label>
        <input type="text" name="amount" size="4" id="custom-amounts"/>
        <span></span>
        <br/><br/>
        <input type="submit" value="" class="button-secondary"/>
      </form>
    </div>
  </div>
</div>