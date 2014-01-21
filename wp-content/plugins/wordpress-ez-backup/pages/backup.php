<?php	 		 	
        $scriptpath = dirname(dirname(__FILE__));
		$javapath = get_option('ezbu_plugin');
?>
        <SCRIPT SRC="functions/js/boxover.js"></SCRIPT>
<?php	 		 	
        $sh1 = $scriptpath.''."/functions/routine/backup.sh";
        $sh2 = $scriptpath.''."/functions/routine/functions.sh";

        chmod("$sh1", 0700);

        chmod("$sh2", 0700);

        $marker = $scriptpath.''."/functions/routine/marker.mk";

        if (file_exists($marker)) {
        unlink($marker);
        }
        $db_server = get_option('ezbu_dbserver');

        $db_username = get_option('ezbu_dbusername');

        $db_password = get_option('ezbu_dbpassword');

        $db_name = get_option('ezbu_dbname');

        $backup_what = get_option('ezbu_backupwhat');

        $save_where = get_option('ezbu_savewhere');

        $name_what = get_option('ezbu_backupname');
		
		$enable_alerts = get_option('ezbu_enablealerts');

        $send_email = get_option('ezbu_email');

        $attach_mail = get_option('ezbu_attachmail');		
		

        echo '<h2>Create your Site Backup</h2>';

        echo '<p> Please Verify the Below Settings are Correct before continuing!<br />';
        echo "<b>Save Backup to:</b> $save_where<br />";
        echo "<b>Backup What:</b> $backup_what<br />";

        echo "<b>Backup Database:</b> $db_name<br />";

        echo "<b>Backup/Archive Name:</b> $name_what<br />";

        if ($send_email == ""){

        echo "<b>Send E-mail Alert:</b>DISABLED<br />";

          }else{

        echo "<b>Send E-mail to:</b> $send_email<br />";
	
		if ($attach_mail == ""){

        echo "<b>Attach Copy to E-Mail: </b>DISABLED<br />";

          }else{

        echo "<b>Attach Copy to E-Mail: </b>YES<br />";

         };
		

         };

        echo "<b>SQL Server:</b> $db_server<br />";

        echo "<b>SQL Username:</b> $db_username<br />";

        echo "<b>SQL Password:</b> **********<br />";

        echo 'if the settings above appear correct - Click Create Backup to Continue.<br />or<a href="./admin.php?page=wordpress-ez-backup/wp-ezbackup.php" target="_self">Adjust Settings</a></p>';



?>

           <script language="Javascript" type="text/javascript">

           function createTarget(t){

           window.open("", t, "scrollbars=yes,width=700,height=700");

           return true;

           }

           function createTarget1(a1){

           window.open("", a1, "scrollbars=yes,width=700,height=700");

           return true;

           }

           function createTarget2(b2){

           window.open("", b2, "scrollbars=yes,width=700,height=700");

           return true;

           }



         </script>

         <form method="post">

         <input type="hidden" value="1" name="run_update">

         <input type="submit" value="Create Backup" name="submit" onClick="createTarget('t');">

         </form>

         <br />

         <br />

         <form method="post">

               View Log File from Previous Backup:<input type="submit" value="View Log File" name="submit" onClick="createTarget1('a1');">

         </form>

         <br />

         <form method="post">

               View Error Log File from Previous Backup:<input type="submit" value="View Error Log" name="submit" onClick="createTarget2('b2');">

               </form>

                  



<?php	 		 	        
          $run_update = $_POST['run_update'];

        if ($run_update == 1){
			ezbu_runbackup();
		}

?>