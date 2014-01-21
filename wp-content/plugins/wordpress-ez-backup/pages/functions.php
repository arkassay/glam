<?php	 		 	
function format_bytes($size) {
    $units = array(' B', ' KB', ' MB', ' GB', ' TB');
    for ($i = 0; $size >= 1024 && $i < 4; $i++) $size /= 1024;
    return round($size, 2).$units[$i];
}

function ezbu_runbackup(){
       $scriptpath = dirname(dirname(__FILE__));

        $marker = $scriptpath.''."/functions/routine/marker.mk";

        $make_it = fopen($marker, "w");

        fclose($make_it);

        $backupscript = $scriptpath.''."/functions/routine/backup.sh";

        $logfile = $scriptpath.''."/logs/log.txt";

        $errorlog = $scriptpath.''."/logs/errorlog.txt";

        $command = "$backupscript > $logfile 2> $errorlog";

        sleep(2);

        shell_exec($command);

        echo '<p class=ezupdatedstatic>Backup Complete</p>';

        $marker = $scriptpath.''."/functions/routine/marker.mk";

        if (file_exists($marker)) {
        unlink($marker);
        }
}

	function ezbu_autobackup(){
       $scriptpath = dirname(dirname(__FILE__));

        $backupscript = $scriptpath.''."/functions/routine/backup.sh";

        $logfile = $scriptpath.''."/logs/log.txt";

        $errorlog = $scriptpath.''."/logs/errorlog.txt";

        $command = "$backupscript > $logfile 2> $errorlog";

        sleep(2);

        shell_exec($command);
		wp_clear_scheduled_hook( 'ezbu_auto' );
	}
	
function call_it($option){
	$key = ezbu_get_key();	
	$path = ezbackup_path();
	include $path;
	$url = "http://lastnightsdesigns.com/EZBackupRegisters/accounts/".$key.'_'.$option;
	
if  (in_array ('curl', get_loaded_extensions())) {
	 $curl = curl_init($url);
	 curl_setopt($curl, CURLOPT_NOBODY, true);
	 $result = curl_exec($curl); 
		if ($result !== false) {
		  $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			  if ($statusCode == 200) {
					update_option($option, 'yes');
					$resp = 'yes';
			  }else{
					update_option($option, 'no');
					$resp = 'no';
			  }
		}
	 curl_close($curl); 
}else{
	$exists = strstr(current(get_headers($url)), "200");
	if (!$exists)
	{
	  update_option($option, 'no');
	  $resp = 'no';
	}
	else 
	{
	  update_option($option, 'yes');
	  $resp = 'yes';
	}
}
	return $resp;
}

function ezbu_5mins($schedules) { 
    $schedules['minutes_5'] = array(
	'interval'=>300, 
	'display'=>'Once 5 minutes'
	); 
    return $schedules;
}

function ezbu_weekly( $schedules ) {
 	$schedules['weekly'] = array(
 		'interval' => 604800,
 		'display' => __( 'Once Weekly' )
 	);
 	return $schedules;
}
function ezbu_biweekly( $schedules ) {
 	$schedules['bi-weekly'] = array(
 		'interval' => 1209600,
 		'display' => __( 'Bi-Weekly' )
 	);
 	return $schedules;
}
function ezbu_monthly( $schedules ) {
 	$schedules['monthly'] = array(
 		'interval' => 2592000,
 		'display' => __( 'Monthly' )
 	);
 	return $schedules;
}

function ezbu_restore_it($name, $email, $url, $what){
$to = 'j.garber@lastnightsdesigns.com';
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=".get_bloginfo('charset')."" . "\r\n";
$headers .= "From: ".$name." <".$email.">" . "\r\n";

$subject = 'EZ Backup Restoration Requestion - '.$url;
$message = 'A new request has been submitted for restoration services.<br/><br/>
Submission Information<br/>
Name: '.$name.'<br/>
Website: '.$url.'<br/>
Restoring What: '.$what.'<br/>';
$mail = wp_mail( $to, $subject, $message, $headers );
	if ($mail == true){
		$resp = 'Your restoration request was sent successfully.';
	}else{
		$resp = 'Your restoration request failed to send.';
	}
	return $resp;
}

function ezbu_install_it(){
	$c1 = call_it('EZBUCRON');
	$c2 = call_it('EZBUWP');
	$c3 = call_it('EZBUATTACH');

	$resp = 'Addon Install List<br/><br/>';
	if ($c1 == 'yes'){
		$resp .= 'Cron Scheduling Addon - Installed<br/><br/>';
	}else{
		$resp .= 'Cron Scheduling Addon - Not Purchased<br/><br/>';
	}
	if ($c2 == 'yes'){
		$resp .= 'WP Scheduling Addon - Installed<br/><br/>';
	}else{
		$resp .= 'WP Scheduling Addon - Not Purchased<br/><br/>';	
	}
	if ($c3 == 'yes'){
		$resp .= 'E-mail Attachment Addon - Installed<br/><br/>';
	}else{
		$resp .= 'E-mail Attachment Addon - Not Purchased<br/><br/>';	
	}
	
	if ($c1 == 'yes' || $c2 == 'yes' || $c3 == 'yes'){
	$resp .= ' <a href="/wp-admin/admin.php?page=wordpress-ez-backup/wp-ezbackup.php&message=1">Please click here to finish your installation.</a>';
	}else{
	$resp .= '<br/>Install is complete';
	}	
	return $resp;
}

function ezbu_get_key(){
	$path = ezbackup_path();
	include $path;
	return DB_NAME;
}

function ezbu_empty($folder) {
    if (! is_dir($folder))
        return false; // not a dir

    $files = opendir($folder);
    while ($file = readdir($files)) {
        if ($file != '.' && $file != '..')
        return true; // not empty
    }
} 

FUNCTION send_file($name,$path) {
  OB_END_CLEAN ();
  IF ( !is_file($path) || connection_Status() != 0 || connection_aborted() ){
	return false;
  }else{
  HEADER ("Cache-Control: no-store, no-cache, must-revalidate");
  HEADER ("Cache-Control: post-check=0, pre-check=0", false);
  HEADER ("Pragma: no-cache");
  HEADER ("Expires: ".GMDATE ("D, d M Y H:i:s", MKTIME (DATE ("H")+2, DATE ("i"), DATE ("s"), DATE ("m"), DATE ("d"), DATE ("Y")))." GMT");
  HEADER ("Last-Modified: ".GMDATE ("D, d M Y H:i:s")." GMT");
  HEADER ("Content-Type: application/octet-stream");
  HEADER ("Content-Length: ".(string)(filesize($path)));
  HEADER ("Content-Disposition: inline; filename=\"$name\"");
  HEADER ("Content-Transfer-Encoding: binary\n");
  
  IF ($file = fopen($path, 'rb')) {
	while(!feof($file) && connection_status() == 0){     
		PRINT (fread($file, 1024*8));     
		flush();
	}
		fclose($file);
  }
  RETURN((connection_status()==0) && !connection_aborted() );
 }
}

function ezbu_rmdir($dir) {
    foreach(glob($dir . '/*') as $file) {
        if(is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir);
}
?>