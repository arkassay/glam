<?php	 		 	
if (isset($_GET['message']) && !isset($_POST['form_update'])){
$message = $_GET['message'];
	if ($message == 1){
	$resp = '-Congratulations-<br/><br/>The addons you just installed are now ready for use. Please check your menu and settings for the addons that were installed.<br/><br/>Thank you for your support it is truly appreciated.';
	}
}
	$key = ezbu_get_key();
	$ppath = get_option('ezbu_plugin');	
	$path = get_option('ezbu_root');
	$config = get_option('ezbu_config');
	$config_location = ezbu_config_location();
?>

        <SCRIPT SRC="functions/js/boxover.js"></SCRIPT>
        <SCRIPT SRC="functions/js/main.js"></SCRIPT>		

<div class="info_block">
<h2>WordPress EZ Backup by Jonathan Garber</h2>
<div class="about_author">
About The Author &amp; Plugin
<div title="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[About The Author &amp; Plugin] body=[WordPress EZ Backup was created for private use on my own development sites &amp; client projects. I figured I would release it to the general public in case someone else might find it as useful as I do. Keep an eye on this plugins progress. There are more features to come.]"><img border="0" alt="" src="/images/ezbackup-125x115.png" width="125" height="130"></div>
<p>Please take your time now to adjust the settings below. if you have trouble understanding what A certain setting is for, move your mouse over the little help icon to read more information on it. If you find you need more help please feel free to E-mail me<br/>E-Mail: <a href="mailto:J.Garber@lastnightsdesigns.com?subject=EZ%20Backup%20Help">Jonathan Garber</a><br /></p>
</div>
<div class="purchase_addon">
<div class="block_1">
Donate to EZ Backup
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"  target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7061873">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>	
<?php	 		 	
$c1 = get_option('EZBUCRON');
$c2 = get_option('EZBUWP');
$c3 = get_option('EZBUATTACH');

 if ($c3 == 'no'){ ?>
Purchase Attachment Addon<br/>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="notify_url" value="http://lastnightsdesigns.com/EZBackupRegisters/sbd.php">
<input type="hidden" name="custom" value="">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
<div class="block_2">

Purchase Cron Scheduling Addon<br/>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="notify_url" value="http://lastnightsdesigns.com/EZBackupRegisters/sbd.php">
<input type="hidden" name="custom" value="">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



Purchase WP Scheduling Addon<br/>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="notify_url" value="http://lastnightsdesigns.com/EZBackupRegisters/sbd.php">
<input type="hidden" name="custom" value="">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

</div>
<div class="ezbu_main">
<h2>Message Center</h2>
<?php	 		 	
$homepage = file_get_contents('http://lastnightsdesigns.com/EZBackupRegisters/messages.txt');
echo $homepage;
?>
<br/><br/>
<?php	 		 	
	include $config;
    $update_yes = $_POST['form_update'];
if ($update_yes == 1) {

        	$new_server = $_POST['db_server'];
        	$new_username = $_POST['db_username'];
			$new_password = $_POST['db_password'];
			$new_dbname = $_POST['db_name'];
			$new_backup = $_POST['backup_what'];
			
			if ($new_backup == 'all'){
				$new_backup = $path;
			}
			if ($new_backup == 'wp-content'){
				$new_backup = $path.'/wp-content';
			}
			$new_name = $_POST['name_what'];
			$new_name = str_replace(" ", "_", $new_name);
			$new_name = preg_replace("/[^\w\.]/","",$new_name);
		
			$enable_email = $_POST['enable_email'];
			$attach_mail = $_POST['attach_mail'];		
			if ($c3 == 'no' && $attach_mail == 'on'){
				$resp = 'WHAT ARE YOU DOING DAVE!!<br/>You did not purchase the attachment addon. E-mail Attachment will not be enabled.<br/><br/>';
				$attach_mail = '';
			}	
			
$save_custom = $_POST['save_custom'];		

if ($save_custom == 'on'){
	$new_save = $_POST['custom_location'];
	}else{		
	$new_save = $path.'/Backups_'.DB_USER;
}

	//get folder name for save path
	$new_save_name = end(array_filter(explode("/", $new_save)));

	if ($enable_email == ''){
		$new_email = '';
		delete_option('ezbu_email');
	}else{
		$new_email = $_POST['send_email'];
		update_option('ezbu_email', $new_email);
	}		
	$scriptpath = dirname(dirname(__FILE__));	
	$backupfile = $scriptpath.''."/functions/routine/functions.sh";	
	$scriptfile = $scriptpath.''."/functions/routine/backup.sh";			
	update_option('ezbu_dbserver', $new_server);	
	update_option('ezbu_dbusername', $new_username);	
	update_option('ezbu_dbpassword', $new_password);	
	update_option('ezbu_dbname', $new_dbname);	
	update_option('ezbu_backupwhat', $new_backup);	
	update_option('ezbu_savecustom', $save_custom);
	update_option('ezbu_savewhere', $new_save);
	update_option('ezbu_backupname', $new_name);	
	update_option('ezbu_enablealerts', $enable_email);	
	update_option('ezbu_confdir', $backupfile);
	update_option('ezbu_attachmail', $attach_mail);
	
$confdirtxt = '$confdir';

$fh = fopen($scriptfile, 'w+') or die("cannot open file");

$stringData1 = "#!/bin/bash\n";

$stringData2 = "#\n";

$stringData3 = "# fullsitebackup.sh V1.0\n";

$stringData4 = "#\n";

$stringData5 = "dbhost=$new_server\n";

$stringData6 = "dbuser=$new_username\n";

$stringData7 = "dbpass='$new_password'\n";

$stringData8 = "dbname=$new_dbname\n";

$stringData9 = "webrootdir=$new_backup\n";

$stringData10 = "tempdir=$new_save\n";

$stringData11 = "dirname=$new_save_name\n";

$stringData12 = "tarnamebase=$new_name\n";

$stringData13 = "email=$new_email\n";

$stringData14 = "confdir=$backupfile\n";

if(isset($_POST['attach_mail']) && $c3 == 'yes'){

$stringData15 = "attach=yes\n";

}else{

$stringData15 = "attach=\n";

}

$stringData16 = ". $confdirtxt";

fwrite($fh, $stringData1);

fwrite($fh, $stringData2);

fwrite($fh, $stringData3);

fwrite($fh, $stringData4);

fwrite($fh, $stringData5);

fwrite($fh, $stringData6);

fwrite($fh, $stringData7);

fwrite($fh, $stringData8);

fwrite($fh, $stringData9);

fwrite($fh, $stringData10);

fwrite($fh, $stringData11);

fwrite($fh, $stringData12);

fwrite($fh, $stringData13);

fwrite($fh, $stringData14);

fwrite($fh, $stringData15);

fwrite($fh, $stringData16);



fclose($fh);
$resp .= 'All settings have been updated';

}
//end update function

        $db_server = get_option('ezbu_dbserver');

        $db_username = get_option('ezbu_dbusername');

        $db_password = get_option('ezbu_dbpassword');

        $db_name = get_option('ezbu_dbname');

        $backup_what = get_option('ezbu_backupwhat');

        $save_where = get_option('ezbu_savewhere');
		if ($save_where == ''){			$save_where = $path.'/Backups_'.DB_PASSWORD;		}
        $name_what = get_option('ezbu_backupname');
		
		$enable_alerts = get_option('ezbu_enablealerts');
		
		$save_custom = get_option('ezbu_savecustom');
		

		if ($enable_alerts == ''){
			$send_email = '';
		}else{
		    $send_email = get_option('ezbu_email');
		}
        $attach_mail = get_option('ezbu_attachmail');
		
		//if setting empty echo detected defaults

		if ($backup_what == ''){
		$backup_what = $path;
		}else{
			if ($backup_what == $path){
				$backup = 'full';
			}else{
				$backup = 'content';
			}
		}

		if ($name_what == ''){
		$name_what = 'Put A Name Here';
		}
		$db_name = DB_NAME;
		$db_server = DB_HOST;
		$db_username = DB_USER;
		$db_password = DB_PASSWORD;
	

	$array = get_ezbu_status();
	if (!empty($array)){
		$status_img = '<img src="'.$ppath.'images/reddot.jpg" width="10px" height="10px">';
		$status_message .= '<SPAN TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[System Errors] body=[';
			foreach ($array as $a => $k){
				$status_message .= $k.'<br/>';
			}
		$status_message .= '<br/><br/>Please feel free to e-mail me for support.';
		$status_message .= ']">'.$status_img.' - There are System Errors. <strong>click here to view them</strong></SPAN>';	
	}else{
		$status_message = '<img src="'.$ppath.'images/greendot.jpg" width="10px" height="10px"> - Your webhost supports Wordpress EZ Backup';
	}
		
?>
<h2>Your Settings</h2>
<strong>System Status:</strong> <br/><br/>
<strong>Currently Archiving:</strong> <br/>
<strong>Currently Saving Archives to:</strong> <br/><br/>
<table border="0" width="100%">
<form method="post">
  <tr>

     <td>Backup What?:</td>

     <td><select name="backup_what">
	 <option  value="all">Full Website</option>
	 <option  value="wp-content">WP-Content</option>	 
	 </select>
	 </td>

     <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Backup What?] body=[You can choose to backup your entire public website or just the wp-content folder by itself]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>	

  </tr>  
  <tr>
  
	<td>Save to custom location?:</td>  
  
	<td><input id="save_custom" type="checkbox"  name="save_custom"></td>
  
	<td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Custom Location] body=[You can choose to save your backups in a different location if you want.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>
  
  </tr>
  
  <tr id="custom_location">
  
	  <td>Custom Location:</td>
	  
	  <td><input type="text" name="custom_location" value=""></td>
	  
	  <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Custom Location] body=[Enter the location you wish to save your backups to.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>
  </tr>
  <tr>
     <td>What Name to give your Backup:</td>
     <td><input type="text" name="name_what" value=""></td>
     <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[What Name] body=[Enter A file name to assign to your Backup. This Plugin will automatically attach a Date Stamp format YYYY-MM-DD to the End of the File Name you enter here.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>	 
  </tr>
    <tr>
     <td>Enable E-mail Alerts:</td>
     <td><input id="enable_email" type="checkbox"  name="enable_email"></td>
     <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Enable E-mail Alerts] body=[You will be sent an alert via e-mail when a backup is completed.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>
  </tr>
    <tr id="email_address">
     <td>Email Address:</td>
     <td><input type="text" name="send_email" value=""></td>
     <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[E-Mail Alerts] body=[This is the e-mail address alerts will be sent to.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td>
  </tr>

    <tr id="email_address1">
     <td>Send Backup as E-Mail Attachment:</td>

     <td><input type="checkbox" name="attach_mail" ></td>

     <td><DIV TITLE="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Attach Backup in E-mail] body=[Attach a copy of the file backup to your e-mail alert.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></DIV></td> 

  </tr>
</table>
<input type="hidden" name="db_username" value="">
<input type="hidden" name="db_password" value="">
<input type="hidden" name="db_server" value="">
<input type="hidden" name="db_name" value="">
<input type="hidden" value="1" name="form_update">
<input type="submit" value="Save Settings" name="submit"> : <a href="./admin.php?page=ezbackup-run" target="_self">Create Backup</a>

<p class="ezupdatedstatic"></p>

</div>
</div>
<?php	 		 	
function get_ezbu_status(){

	$array = array();
	if(!shell_exec('dir')){ 
		$array[shell] = 'Sorry but your webhost does not allow the shell command to be executed. This command is required by wordpress ez backup. You will not be able to use this plugin';
	}
	if(shell_exec('tar' != 2)){ 
		$array[tar] = 'The Tar command is not accessible. You will not be able to use Wordpress EZ Backup';
	}

	if  (!is_callable('mail')) {
		$array[mail] = 'The mail function is not available on your webhost. The plugin will not be able to send e-mail alerts or attachments';
	}
	if  (!is_callable('readdir')) {
		$array[readdir] = 'The readdir command is not available on your webhost. The plugin will not function properly on your webhost.';
	}
	if  (!is_callable('fwrite')) {
		$array[fwrite] = 'The fwrite command is not available on your webhost. The plugin will not function properly on your webhost.';
	}		
	if  (!is_callable('unlink')) {
		$array[unlink] = 'The unlink command is not available on your webhost. The plugin will not function properly on your webhost.';
	}
	if  (!is_callable('rmdir')) {
		$array[rmdir] = 'The rmdir command is not available on your webhost. The plugin will not function properly on your webhost.';
	}
	if  (!is_callable('mkdir')) {
		$array[mkdir] = 'The mkdir command is not available on your webhost. You will need to create the folders this plugin needs manually.';
	}	
	if  (!is_callable('chmod')) {
		$array[chmod] = 'The chmod command is not available on your webhost. You will need to set file permissions manually to use this plugin.';
	}	if(ini_get('safe_mode')){		$array[safemode] = 'Your webhost has Safe Mode enabled for PHP. Due to this you will not be able to use EZ Backup. EZ Backup requires certain functions that Safe Mode disables. Sorry';	}
		return $array;
}

?>