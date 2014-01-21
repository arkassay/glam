<?php	 		 	
        $send_file = $_POST['file'];
		$backupfolder = $_POST['buf'];
        $file = $backupfolder.'/'. $send_file;
		$ppath = get_option('ezbu_plugin');
		
if (isset($_POST['trash'])) {
		if (file_exists($file)) {
			unlink($file);
			$resp = 'Backup located at<br />'.$file.'<br />Has been removed.<br/><br/>';
		}
}
		$path = get_option('ezbu_savewhere');		
		$is_empty = ezbu_empty($path);
?>
<SCRIPT SRC="functions/js/boxover.js"></SCRIPT>
<div style="width: 600px;">
<h2>Backup Browser</h2>
<p>The Backup browser is a simple tool for managing your backups. Download or Delete.<br /><br /></p>
</div>
List of Current Backups 

<form method="post">
<input type="hidden" name="buf" value="">
<?php	 		 	
        $dhandle = opendir($path);
        $files = array();
        if ($dhandle) {

   while (false !== ($fname = readdir($dhandle))) {

      if (($fname != '.') && ($fname != '..') && ($fname != '.htaccess') &&

          ($fname != basename($_SERVER['PHP_SELF']))) {

          $files[] = (is_dir( "./$fname" )) ? "(Dir) {$fname}" : $fname;
      }
   }

   closedir($dhandle);

}
echo "<select name=\"file\">";

foreach( $files as $fname )

{
	$filesize = filesize($path.'/'.$fname);
	$filesize = format_bytes($filesize);
	
   echo '<option value="'.$fname.'">'.$fname.' - '.$filesize.'</option><br />';

}

   echo '</select>';

?>
<br /><br/>
<div style="width: 100px;" title="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Download] body=[This will start a direct download of your selected backup.]"><input type="submit" name="download" value="Download This Backup"></div>
<div style="width: 100px;" title="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Permanently Delete Backup] body=[This will delete your backup and ensure no copies are left anywhere on your server.]"><input type="submit" name="trash" value="Permanently Delete Backup" onclick="return confirm('Are you sure you want to Permanently Delete this backup? ')"></div>
</form>

<p style="color: #FF0000; font-weight: bold;">No Backups Exist Yet</p><p><a href="/wp-admin/admin.php?page=ezbackup-run">Create A Backup Now</a></p>


<p class="ezupdatedstatic"></p>
