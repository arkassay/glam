<?php	 		 	
/*
Plugin Name: WordPress EZ Backup
Plugin URI: http://lastnightsdesigns.com/wordpress-ez-backup/
Description: Fast Creation of Full Site Backups & Database Backups. Simply adjust your settings & Create your Backup. Features E-mail Alert & E-Mailing Backups, Viewing Live Log files of the backup procedure, Backup Browser & Automated Backups with Scheduling.
Version: 7.0.6
Author: Jonathan Garber
Author URI: http://lastnightsdesigns.com
*/

include 'pages/functions.php';
function ez_stylesheet() {
    $style = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    echo '<link rel="stylesheet" type="text/css" href="' . $style . 'functions/css/ezstyle.css" />';
}
add_action('admin_head', 'ez_stylesheet');
function ezbu_checksub($domain) {  
$exp = explode('.', $domain);  
	if(count($exp) > 2) {   
		return true;  
	} else{   
		return false;  
	} 
} 

function ezbu_installer() {	
    $chmods = dirname(__FILE__);
    $sh1 = $chmods.''."/functions/routine/backup.sh";
    $sh2 = $chmods.''."/functions/routine/functions.sh";
    $sh3 = $chmods.''."/logs/errorlog.txt";
    $sh4 = $chmods.''."/logs/log.txt";
    chmod("$sh1", 0700);
    chmod("$sh2", 0700);
	chmod("$sh3", 0700);
	chmod("$sh4", 0700);
	$c1 = call_it('EZBUCRON');
	$c2 = call_it('EZBUWP');
	$c3 = call_it('EZBUATTACH');		$root = ezbu_load_path();
			$config = ezbackup_path();
	$plugin = plugin_dir_url('').plugin_basename(dirname(__FILE__)).'/';
	update_option('ezbu_config', $config);
	update_option('ezbu_plugin', $plugin);	update_option('ezbu_root', $root);
}
function ezbu_uninstall() {
   global $wpdb;
   $table_name = $wpdb->prefix . "ezbu_settings";
   $sqldrop = "DROP TABLE IF EXISTS $table_name";
   $results = $wpdb->query( $sqldrop );
}

register_activation_hook( __FILE__, 'ezbu_installer' );
register_deactivation_hook( __FILE__, 'ezbu_uninstall' );
add_action('admin_menu', 'ezbu_plugin_menu');

function ezbu_plugin_menu() {
$c1 = get_option('EZBUCRON');
$c2 = get_option('EZBUWP');
  add_menu_page('EZ Backup Settings', 'EZ Backup', 8, __FILE__, ezbu_main_menu);
  add_submenu_page(__FILE__, 'Creating A Backup', 'Run Backup', 8, 'ezbackup-run', ezbu_sub_menu); 
  add_submenu_page(__FILE__, 'Browse Backups', 'Backup Browser', 8, 'ezbackup-browse', ezbu_sub_menu1);
	if ($c1 == 'yes'){
	  add_submenu_page(__FILE__, 'Cron Scheduling', 'Cron Scheduling', 8, 'ezbackup-cron', ezbu_sub_menu5);  
	}
	if ($c2 == 'yes'){
	  add_submenu_page(__FILE__, 'Wordpress Scheduling', 'Wordpress Scheduling', 8, 'ezbackup-wp', ezbu_sub_menu6);  
	}
	
  add_submenu_page(__FILE__, 'Restore', 'Restore', 8, 'ezbackup-restore', ezbu_sub_menu4);	
  add_submenu_page(__FILE__, 'Activate Addons', 'Activate Addons', 8, 'ezbackup-activate', ezbu_sub_menu7);  
  add_submenu_page(__FILE__, 'EZ Backup Help', 'EZ Backup Help', 8, 'ezbackup-help', ezbu_sub_menu3);   
 

}

function ezbu_sub_menu7(){
include 'pages/activate.php';
}

function ezbu_sub_menu6(){
include 'pages/wp.php';
}

function ezbu_sub_menu5(){
include 'pages/cron.php';
}
function ezbu_sub_menu4(){
include 'pages/restore.php';
}

function ezbu_sub_menu3() {
include 'pages/help.php';
}

function ezbu_sub_menu1() {
include 'pages/browser.php';
} //END OF SUB MENU OVERALL

function ezbu_sub_menu() {
include 'pages/backup.php';
}       

function ezbu_main_menu() {
include 'pages/main.php';
}

function ezbu_load_path(){    $base = dirname(__FILE__);    $path = false;    if (@file_exists(dirname(dirname($base))."/wp-load.php")){        $path = dirname(dirname($base));    }else if (@file_exists(dirname(dirname(dirname($base)))."/wp-load.php")){		$path = dirname(dirname(dirname($base)));    }else if (@file_exists(dirname(dirname(dirname(dirname($base))))."/wp-load.php")){		$path = 'outside';    }else{    $path = false;	}    if ($path != false)    {        $path = str_replace("\\", "/", $path);    }    return $path;}
function ezbu_config_location()
{
    $base = dirname(__FILE__);
    $path = false;
    if (@file_exists(dirname(dirname($base))."/wp-config.php")){
        $path = dirname(dirname($base))."/wp-config.php";
    }else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")){
		$path = dirname(dirname(dirname($base)))."/wp-config.php";
    }else if (@file_exists(dirname(dirname(dirname(dirname($base))))."/wp-config.php")){
		$path = 'outside';		
    }else{
    $path = false;
	}
    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}

function ezbackup_path($noconfig = false)
{
    $base = dirname(__FILE__);
    $path = false;

	
if ($noconfig == true){
    if (@file_exists(dirname(dirname($base))."/wp-config.php")){
        $path = dirname(dirname($base));
    }else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")){
		$path = dirname(dirname(dirname($base)));
    }else if (@file_exists(dirname(dirname(dirname(dirname($base))))."/wp-config.php")){
		$path = dirnamedirname((dirname(dirname($base))));		
    }else{
    $path = false;
	}
}else{
    if (@file_exists(dirname(dirname($base))."/wp-config.php")){
        $path = dirname(dirname($base))."/wp-config.php";
    }else if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php")){
		$path = dirname(dirname(dirname($base)))."/wp-config.php";
    }else if (@file_exists(dirname(dirname(dirname(dirname($base))))."/wp-config.php")){
		$path = dirname(dirname(dirname(dirname($base))))."/wp-config.php";		
    }else{
    $path = false;
	}
}

    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}

add_filter( 'cron_schedules', 'ezbu_weekly' );
add_filter( 'cron_schedules', 'ezbu_biweekly' );
add_filter( 'cron_schedules', 'ezbu_monthly' );
add_filter( 'cron_schedules', 'ezbu_5mins');
add_action( 'ezbu_auto', 'ezbu_autobackup' );



register_activation_hook( __FILE__, 'ezbu_tst_act' );
register_deactivation_hook( __FILE__, 'ezbu_tst_dea' );

function ezbu_get_version() {
$plugin_data = get_plugin_data( __FILE__ );
$plugin_version = $plugin_data['Version'];
return $plugin_version;
}add_action('admin_init','ezbu_tst_chk');
function ezbu_tst_chk() {
	$last_known_version = get_option('ezbu_version');	
	$current_version = ezbu_get_version();	
	if ( $last_known_version != $current_version && $last_known_version != '' ) {
		update_option( "ezbu_version", $current_version );
		ezbu_tst_upd();		
		ezbu_updates();
	}
}
function ezbu_updates(){
//version 7.0.3 upgrade routine - ensuring new permissions are set
    $chmods = dirname(__FILE__);
    $sh1 = $chmods.''."/logs/errorlog.txt";
    $sh2 = $chmods.''."/logs/log.txt";
	chmod("$sh1", 0700);
	chmod("$sh2", 0700);		$root = ezbu_load_path();			$config = ezbackup_path();	$plugin = plugin_dir_url('').plugin_basename(dirname(__FILE__)).'/';	update_option('ezbu_config', $config);	update_option('ezbu_plugin', $plugin);	update_option('ezbu_root', $root);
}

function ezbu_tst_act(){
	$url = 'http://techstud.io/usage/index.php';
	$data = array(
		'plugin' => 'ezbu',
		'event' => 'activation',
		'domain' => $_SERVER['HTTP_HOST'],
		'date' => date("F j, Y, g:i a"),
		'version' => ezbu_get_version()
	);
	$ts = ezbu_tst_curl_hit($url,$data);		$version = ezbu_get_version();
	update_option("ezbu_version", $version);
}

function ezbu_tst_dea() {
	$url = 'http://techstud.io/usage/index.php';
	$data = array(
		'plugin' => 'ezbu',
		'event' => 'deactivation',
		'domain' => $_SERVER['HTTP_HOST'],
		'date' => date("F j, Y, g:i a"),
		'version' => ezbu_get_version()
	);
	$ts = ezbu_tst_curl_hit($url,$data);
}

function ezbu_tst_upd() {
	$url = 'http://techstud.io/usage/index.php';
	$data = array(
		'plugin' => 'ezbu',
		'event' => 'update',
		'domain' => $_SERVER['HTTP_HOST'],
		'date' => date("F j, Y, g:i a"),
		'version' => ezbu_get_version()
	);
	$ts = ezbu_tst_curl_hit($url,$data);
}

function ezbu_tst_curl_hit($url,$data) {
	if ( function_exists('curl_init') ) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_exec($ch);
		curl_close($ch);
		return $ch;
	}
	return false;
}



add_action('admin_init','download_it');
function download_it(){if (isset($_POST['download'])) {        $send_file = $_POST['file'];		$backupfolder = $_POST['buf'];		$downloadsfolder = $_POST['download_folder'];        $file = $backupfolder.'/'. $send_file;						$root = get_option('ezbu_root');        $newfile = $root.'/BackupDownloads/'. $send_file;		$newfileurl = home_url().'/BackupDownloads/'. $send_file;		$newdir = $root.'/BackupDownloads';		$ppath = get_option('ezbu_plugin');		
		if (!headers_sent($filename, $linenum)) {			send_file($send_file, $file);				exit;			// You would most likely trigger an error here.		} else {			echo "Headers already sent in $filename on line $linenum\n" .				 "Cannot redirect, for now please click this <a " .				 "href=\"http://www.example.com\">link</a> instead\n";			exit;
		}
	}
}
?>