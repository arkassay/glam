=== WordPress EZ Backup ===
Contributors: SangrelX
Author: Jonathan-Garber
Donate link: http://lastnightsdesigns.com/wordpress-ez-backup/
Tags: easy, backup, files, database, mysql, site
Requires at least: 2.8.2
Tested up to: 3.4.2
Stable tag: 7.0.6

Backup & Archive your site & Database all from this easy to use plugin. Many robust features included.

== Description ==
WordPress EZ Backup is A administrators plugin to allow the easiest most feature rich method for creating backup archives of your entire site & database. Please take your time to check out this neat plugin. WordPress EZ Backup started as a private plugin I used on my own & now im bringing it to everyone.

== Installation ==
WAIVER OF RESPONSIBILITY

Neither Myself nor anyone distributing this plugin are to be held responsible for any damages, lost data, corrupted files or the alike that may occur be it due to misconfiguration or error. Your using this plugin at your own risk. This plugin has been tested thoroughly for functionality & safety.
This plugin was created on the following configuration

PHP Version 5.2.9

MySQL Version 5.0.81-community

Apache Version 2.2.11 (UNIX)
The WordPress EZ Backup is designed to function ONLY on Linux/*NIX based operating systems & will use certain system commands in order to perform its functions. If you find this plugin does NOT work on your Webhosting. Please contact me for support, bug reporting, or general comments. It may be possible your webhosting has blocked the ability to run the functions required to create the backups. A future version will be released that does not require system commands. However this future version will NOT be able to create backups of large sites due to PHP limitations.

1. Download Plugin

2. Upload the Plugin Folder to your wp-content/plugins folder

STEP 2 ALTERNATE METHOD: In your WP Admin Panels select Plugins - Add New - Upload & then simply upload the Plugin from your local pc ex. wp-ezbackup.zip

3. Activate the Plugin

4. Go to your newly installed plugin menu labeled EZ Backup & Configure your plugin

== Plugin Configuration ==

Please Click the new label EZ Backup on the Bottom of your Admin Menu. See the list below for explanation of each Setting & to further understand how to set them.

1. Backup What - you can choose to backup either the entire website or just the content within the wp-content folder itself.

2. Name your backup - You can name your site backup whatever you want. Do not include special characters or spaces in the name. You may use underscores in the name.

3. Enable e-mail alerts - This will enable the plugin to send out an alert to the email address you specify when completing a backup.

4. E-mail address - The e-mail address you wish to have alerts sent to.

5. Send backup as Attachment - This will attach the backup created to the email when it sends the alerts.


== Features ==

1. Backup your entire website or wp-content folder

2. Backup your entire database.

3. View Live log file of the Backup Procedure.

4. Choose to enable E-mail alerts upon backup completion.

5. Viewable Error Logs direct from the Plugin.

6. Viewable Procedure Logs direct from the Plugin.

7. Simple to use interface with interactive Help & Auto Settings pulled from your current webserver configuration.

5. Choose to have a copy of the Backup e-mailed to you.

6. Browse currently created Backups

7. Schedule automatic backup with cron jobs.

8. Schedule automatic backup using built in WP Scheduler. If your host does not support Cron Jobs.

9. Request website restoration assistance right from within the plugin.

== Screenshots ==

1. WordPress EZ Backup Settings & Information

2. WordPress EZ Backup Creation

3. WordPress EZ Backup Creation with Log

4. WordPress EZ Backup Browser

5. WordPress EZ Backup Schedule Creation with Cron Jobs

6. WordPress EZ Backup Schedule Creation with WP Scheduling

7. WordPress EZ Backup Restoration Services Form

== Uninstallation ==

1. Simply Deactivate the plugin

== Frequently Asked Questions ==

= Why do I have a blank index.html file in each folder of this plugin =
this is simply to prevent anyone from direct linking aka indexing your plugins directories & folders. if you wish & know how to do so. You could simply use your webhosting controls to adjust indexing on your site.

= How does the Backup Browser Function =
Backup browser is a simple tool for viewing your current backups, downloading them or removing them.

= How does E-Mailing the Backup as an Attachment Work =
With the attachments addon you can e-mail A copy of your created backup as an attachment with the alerts e-mails. This addon only costs 5.00 via paypal.

= How does the Automatic Scheduling work =
This Addon can be purchased & used to setup automatic creation of your backups. You can purchase one of two options for scheduling backups. For those webhosts that allow the use of Cron Jobs you can purchase the cron jobs addon to schedule backups. If you cannot use cron jobs with your webhost then consider purchasing the WP Scheduling addon. With one of these two options you should be able to easily schedule your backup creation.

= Why are the addons being sold instead of included freely =
Like everyone I have bills to pay and a family to support. Since most users do not donate to support the development of plugins. I am now forced to charge for additional features.

== Changelog === 7.0.6 =*Fixed addon routine to be more compatible with other webhosts.= 7.0.5 =*Fixed slight issue with log viewing during backup creation. Also moved the close window button so it won't appear until final log entry is created.
= 7.0.4 =*Rewrote how the backup browser works and its routine for sending files. Should work across all major browsers.*Rewrote several portions of code throughout the plugin to clean up some routines and organize them better*Several minor bugs and cosmetic things were adjusted and improved on.
= 7.0.3 =
*Many changes to the plugin and some of its function. Added a file size display to the browser. changed how parts of the browser work etc.

*Fixed a lot of bugs I found due to the file path changes sorry guys.

= 7.0.2 =

*Fixed a few bugs that were due to the changes in the paths.

*Updated the backup scripts to properly handle the new paths.

= 7.0.1 =

*Major Update to how paths are set for saving backups. Backups by default will now save to obscured path within your public directory. This path is also secured by its permissions and all backups that are saved here are also secured by their permissions. This was changed in an attempt to make the plugin even more universally compatible with other web hosts.

*You can now customize the path the backups are saved to. The path you set will still be protected by permissions as well as the backups within.
= 7.0.0 =
*Added additional security to the scripts and logs to prevent direct url access.

*Added safe mode detection to the compatibility tester. Webhosts with Safe Mode enabled will not be able to run EZ Backup. EZ Backup requires certain functions that Safe Mode disables. Sorry

= 6.0.9 =
*Backup names are filenames and in order to keep them proper in the system they should not contain spaces or special characters. I modified how the backup name inputs are saved to ensure no spaces or special characters are allowed in the name.

= 6.0.8 =
*Found a rather big bug in the backup scripting. It would exit if the backup storage folder was not already created instead of properly creating it and continuing. this has been fixed

= 6.0.7 =
*re-wrote the cron addon to properly work with existing cron jobs that were created by other programs or softwares. It will no longer overwrite those jobs.

= 6.0.6 =
*Fixed small bug in the cron scheduling addon.

= 6.0.5 =
*Added new features including a compatibility checker that will tell you if your webhost does not support using EZ Backup.

*Added a message center so you can see latest messages and news about EZ Backup.

*Completely adjusted the routine for setting paths. I noticed some issues with subdirectory and subdomain installs. This should have fixed that bug.

= 6.0.4 =
*adjusting upgrade routine to prevent users from having to manually deactivate and reactivate in order to make upgrades take effect.

= 6.0.3 =
*Adjusted download routine as well as some path routines to be more efficient.
*Plugin now works for Subdomains
*Plugin now works for users who keep their wp-config outside the public dir for security

= 6.0.2 =
*The bug with the scripts should be resolved now. bug was due to cross system issues between unix ann windows

= 6.0.1 =
*This update is to test a bug fix that occurs when the plugin is installed via wordpress extend

= 6.0.0 =
*This version has been heavily modified and had large portions re-written.

*Added new addon for WP Scheduling for those who cannot use Cron Jobs.

*Modified the plugin readme to reflect more changes and properly explain other aspects of the plugin.

*Modifed the backup procedure to be more streamlined and automated.

*Modified the settings page to be easier to use and it now does not require advanced knowledge of your webhost/webspace.

*Modified the Cron scheduling tool to be much easier to manage and function smoother.

*Modified several pages and how they are coded.

*Modified the backup browser and its function to streamline the process of downloading backups and ensuring no backups are left open to the public for security reasons.

= 5.0 =
Tweaked a few sections. Made the configuration section much easier by automatically inputting DB Host, DB User, DB Password and the user paths. Still fully adjustable if needed under settings page.

= 4.9 =
Fixed Cosmetic issues - touched up and cleaned up some code - dropped all previous versions

= 4.8 =
Fixed A Fatal Error - Darn unix to dos conversions .... Please use this version NOT 4.7

= 4.7 =
Added more error checking code to the script to make it easier to figure out whats going wrong if the plugin is not working & Dropped support for all previous versions!

= 4.6 =
Fixed a few more issues Added directory check to ensure target for backup exists before continuing! & fixed an issue with passwords that use special characters exanple: !@#$%^&*() etc..

= 4.5 =
Fixed A Security issue - Highly recommend upgrading as soon as possible to patch this potential issue

= 4.4 =
Fixed Cosmetic Error that could Confuse some people about what Database is being Backed up.. Error Found by Curtis from http://www.htmlcenter.com/blog/upgrading-your-wordpress-installation

= 4.3 =
Fixed A small error with a scripting file. NON Fatal Error - DROPPED Support for ALL PREVIOUS VERSIONS

= 4.2 =
Fixed small error in Scheduling page and some CSS cross browser issues!

= 4.1 =
Fixed minor Bug with Texts This bug does not effect Function of the plugin submitted by navjotjsingh

= 4.0 =
Released all Addons for Free. Have fun guys!

= 3.3 =
Added additional page to plugin menu Help & Information

= 3.2 =
Added more premium options to plugin

= 3.1 =
Cleaned up some code remnants. nothing that will effect the functionality of the Plugin.

= 3.0 =
Made Many major updates to the plugin added the ability to purchase addons for your WordPress EZ-Backup Plugin

= 2.0 =
Made changes to certain texts, spelling, punctuation. just fixing up a few minor things.

= 1.0 =
First Release

= Deprecated Versions =
Beta 1 through 8 has been dropped
Version 1.0 - 5.0 have been dropped