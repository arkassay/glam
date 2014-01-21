<?php	 		 	
if (isset($_POST['do_install'])){
$resp = ezbu_install_it();
}
?>
<div class="info_block">
<h2>Installing Purchased Addons</h2>
<p>Addons that you purchased are easy to install. You can deactivate the reactivate the plugin this will verify your purchase and install the addons. You can also manually activate the addons.<br/>
<form method="post">
<input type="submit" name="do_install" value="Activate Purchased Addons">
</form>
</p>

<p class=ezupdatedstatic></p>

</div>