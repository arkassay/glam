<?php	 		 	
if (isset($_POST['save_it'])){
$interval = $_POST['interval'];
	if( !wp_next_scheduled( 'ezbu_auto' ) ) {
		wp_schedule_event(current_time( 'timestamp' ), $interval, 'ezbu_auto' );
	}else{
		wp_clear_scheduled_hook('ezbu_auto');
		wp_schedule_event(current_time( 'timestamp' ), $interval, 'ezbu_auto' );
	}
	$resp = 'Your schedule has been set.';
}
if (isset($_POST['clear_it'])){
	if( !wp_next_scheduled( 'ezbu_auto' ) ) {
		$resp = 'There was nothing to clear.';
	}else{
		wp_clear_scheduled_hook('ezbu_auto');
		$resp = 'Your schedule has been cleared. No automatic backup will occur';
	}	
}


$current_schedule = wp_get_schedule(ezbu_auto);
$ppath = get_option('ezbu_plugin');

?>
<SCRIPT SRC="functions/js/boxover.js"></SCRIPT>
<SCRIPT SRC="functions/js/wpcron.js"></SCRIPT>
<div style="width: 600px;">
<h2>Wordpress Scheduling</h2>
<p>Here you can take advantage of the built in Wordpress Scheduling. Wordpress has a simple but effective tool for automating tasks. Wordpress EZ Backup was re-written to take advantage of this tool. The WP Scheduling is not as flexible as Cron jobs but it will do what you need for automated backups.</p>

<p class=ezupdatedstatic></p>

<h2>Current Schedule</h2>

<p style="color: #FF0000; font-weight: bold;">Your backup is set to run - </p>

<p style="color: #FF0000; font-weight: bold;">There is no currently scheduled backup.</p>

<a id="show_wp">Show Schedule Creator</a>
<div class="wp_create">
<h2>Create A Schedule</h2>
<form method="post">
Select A Interval: 
<select name="interval">
<option value="monthly">Monthly</option>
<option value="bi-weekly">Bi-Weekly</option>
<option value="weekly">Once Weekly</option>
<option value="daily">Daily</option>
</select><br/>
<input type="submit" name="save_it" value="Save Schedule">
<input type="submit" name="clear_it" value="Clear Schedule">
</form>
<div style="width: 100px;" title="cssbody=[dvbdy1] cssheader=[dvhdr1] header=[Recommended Settings] body=[Weekly backups are best for medium size sites (200 to 500mbs).<br/><br/>Bi-Weekly is ok for semi large sites(1-2gbs).<br/><br/>Monthly backups are best for large sites(4-5gbs).<br/><br/>Daily backups are only recommended for sites 100mbs or less.]"><img src="/images/question.gif" width="16" height="16" alt="" border="0" align=""></div>
</div>
</div>
<?php	 		 	


?>