<?php	 		 	
		$cron = get_option('EZBUCRON');
        $scriptpath = dirname(dirname(__FILE__));
		$ppath = get_option('ezbu_plugin');
?>
		<SCRIPT SRC="functions/js/schedule.js"></SCRIPT>
		<SCRIPT SRC="functions/js/boxover.js"></SCRIPT>
<?php	 		 			
		$cronfile = $scriptpath.''."/functions/schedule/schedule.jbz";
        $backupfile = $scriptpath.''."/functions/routine/backup.sh";
		$crondump = "crontab -l > $cronfile";
        shell_exec("$crondump");
        $sh3 = $scriptpath.''."/functions/schedule/schedule.jbz";
        chmod("$sh3", 0700);
		
if (isset($_POST['delete_cron'])){

$logfile = $scriptpath.''."/logs/log.txt";$errorlog = $scriptpath.''."/logs/errorlog.txt";

$newline = get_option('ezbu_cron_command');

file_put_contents($cronfile, str_replace($newline, "", file_get_contents($cronfile)));

$resp = 'Your Cron Schedule has been cleared & disabled';

shell_exec("crontab $cronfile");

delete_option('ezbu_schedule_day');
delete_option('ezbu_schedule_time');
delete_option('ezbu_cron_command');
}

if (isset($_POST['submit'])) {

$oldday = get_option('ezbu_schedule_day');

$oldtime = get_option('ezbu_schedule_time');

$day = $_POST['days'];
$time = $_POST['time'];

	if ($time == $oldtime && $day == $oldday){
		$resp = 'You have already set a automatic backup to occur at this time and date. Your schedule has not been changed.';
	}else{
	$newline = get_option('ezbu_cron_command');
	file_put_contents($cronfile, str_replace($newline, "", file_get_contents($cronfile)));
	
	$command = $_POST['command'];
	$logfile = $scriptpath.''."/logs/log.txt";
	$errorlog = $scriptpath.''."/logs/errorlog.txt";
	$newline = "0 $time * * $day $backupfile > $logfile 2> $errorlog";
	update_option('ezbu_cron_command', $newline);
	$writeit = "$cronfile";
	
		if ($cron == 'yes'){
			$fh1 = fopen($writeit, 'a+') or die("can't open file");
			$stringData = "$newline\n";
			fwrite($fh1, $stringData);
			fclose($fh1);
			update_option('ezbu_schedule_day', $day);
			update_option('ezbu_schedule_time', $time);
		}else{
			$resp = 'Naughty Naughty - You did not purchase this addon. It is not nice to steal hard work from others!!<br/><br/>';
		}

	$resp .= 'Your Schedule has been adjusted';

	shell_exec("crontab $cronfile");
	}

}//end of submit function
        // open current jobs file

        $currentjobs = $cronfile;

	if (filesize($currentjobs) != 0){
        $joblist = fopen($currentjobs, 'r') or die();

        $theData = fread($joblist, filesize($currentjobs));
		
        fclose($joblist);
	}

		$get_day = get_option('ezbu_schedule_day');
		$get_time = get_option('ezbu_schedule_time');
		switch ($get_day){
			case 1:
			$get_day = 'Monday';
			break;
			case 2:
			$get_day = 'Tuesday';
			break;
			case 3:
			$get_day = 'Wednesday';
			break;
			case 4:
			$get_day = 'Thursday';
			break;
			case 5:
			$get_day = 'Friday';
			break;
			case 6:
			$get_day = 'Saturday';
			break;
			case 7:
			$get_day = 'Sunday';
			break;
		}
		$time = $get_day.' '.$get_time.':00:00';
		
		$get_time = strtotime($time);
		$get_time = date("l h:i:s A", $get_time);	

?>
<div style="width: 600px;">
<h2>Cron Scheduling</h2>
<p>Here you can take advantage of your web hosts Cron. Simply set the schedule and let Cron do the rest. Cron jobs are more flexible then wordpress scheduling so take advantage of it.</p></div>

<p class="ezupdatedstatic"></p>

<h2>Current Schedule</h2>

<p style="color: #FF0000; font-weight: bold;">Your automatic backup is set to run every <br/>

<p style="color: #FF0000; font-weight: bold;">There is no currently scheduled backup.</p>

<a id="create">Show Schedule Creator</a></p>
<div class="create_schedule">
<h2>Create The Schedule</h2>
<form method="post">
<table border="0" width="100%">

  <tr>

     <td width="319">What Day of the Week do you wish to run Backups</td>

     <td><select name="days" align="left">

  <option value="1">Monday</option>

  <option value="2">Tuesday</option>

  <option value="3">Wednesday</option>

  <option value="4">Thursday</option>

  <option value="5">Friday</option>

  <option value="6">Saturday</option>

  <option value="7">Sunday</option>

</select></td>

  </tr>

  <tr>

<td width="319">What Time of Day do you wish to Run Backups</td>

<td><select name="time" align="left">

  <option value="0">Midnight</option>

  <option value="1">1 AM</option>

  <option value="2">2 AM</option>

  <option value="3">3 AM</option>

  <option value="4">4 AM</option>

  <option value="5">5 AM</option>

  <option value="6">6 AM</option>

  <option value="7">7 AM</option>

  <option value="8">8 AM</option>

  <option value="9">9 AM</option>

  <option value="10">10 AM</option>

  <option value="11">11 AM</option>

  <option value="12">12 NOON</option>  

  <option value="13">1 PM</option>

  <option value="14">2 PM</option>

  <option value="15">3 PM</option>

  <option value="16">4 PM</option>

  <option value="17">5 PM</option>

  <option value="18">6 PM</option>

  <option value="19">7 PM</option>

  <option value="20">8 PM</option>

  <option value="21">9 PM</option>

  <option value="22">10 PM</option>

  <option value="23">11 PM</option>                               

</select>

  </td>

  </tr>

  <tr><td width="100">
  <form method="post">
<input type="submit" name="submit" value="Save Schedule">
<input type="submit" name="delete_cron" value="Clear Schedule">
</form>
<div style="width: 30px;" title="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Save or Disable Schedule] body=[You can save your new schedule or disable the schedule.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></div>
  </td>
   </tr>

<tr>

<td></td>

<td></td>

</tr>

</table></form>
</div>