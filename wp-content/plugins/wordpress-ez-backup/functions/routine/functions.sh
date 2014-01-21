#!/bin/bash
#
# fullsitebackup.sh V7.4
#
startdir=`pwd`
datestamp=`date +'%Y-%m-%d'`
#
# Input Parameter Check
#
if test "$1" = ""
then
sqlpre=DB
sqlname=$tarnamebase$sqlpre$datestamp.sql
tarname=$tarnamebase$datestamp.tgz
else
tarname=$1
fi
#
# Banner
#
echo ""
echo " WordPress EZ Backup Script"
echo " Written by Jonathan Garber"
echo ""
#
# Create working directory
#
echo " Step 1 Does Selected Backup Directory Exist"
if [ -d $webrootdir ]
then
echo "  .. Selected Directory Exists .. Continuing"
echo "   .. Selected Backup Directory Location .. $webrootdir"
echo ""
echo ""
else
echo ""
echo "  ..Selected Backup Directory Does not Exist"
echo "   .. Please Select A Directory That Exists to Backup"
echo "    .. The Backup Process will now Exit!!"
echo ""
exit 0;
fi
sleep 3
mkdir $webrootdir/$tarnamebase$sqlpre
echo " Step 2 Create Backup Directory & DB Directory"
if [ -d $tempdir ]
then
echo "  .. Backup Directory Already Exists .. Skipping This Step"
echo "   .. Backup Directory Location .. $tempdir"
else
echo "  ..Backup Directory Does not Exist"
echo "   .. Creating Backup Directory $tempdir Now"
mkdir $tempdir || { 
echo "    ..FAILED TO CREATE DIRECTORY"; 
echo "     ..Please ensure you have proper permissions to create folders in the directory Specified"; 
echo "      ..This Process will now EXIT"; 
cd $webrootdir
if [ -d $tarnamebase$sqlpre ]; then
rm -r $tarnamebase$sqlpre
fi
exit 0;
}
chmod 700 $tempdir
fi
sleep 3
#
# sqldump database information
#
echo ""
echo " Step 3 Connect & Archive Database"
echo "  .. Archiving Databases Now"
echo "   .. DataBase User: $dbuser; Database: $dbname; Host: $dbhost"
cd $webrootdir/$tarnamebase$sqlpre
mysqldump -p --user=$dbuser --password=$dbpass --host=$dbhost --add-drop-table $dbname > $sqlname
if [ -s $webrootdir/$tarnamebase$sqlpre/$sqlname ]
then
echo "    .. Database Dumped Successfully"
else
echo "    .. DATABASE BACKUP FAILED .. Please Double check your Settings"
echo "     .. NOTICE - your server must support the mysql dump command for Database Backups to work"
rm -rf $webrootdir/$tarnamebase$sqlpre
fi
sleep 3
#
# TAR website files
#
echo ""
echo " Step 4 Archive Main Files in $webrootdir"
echo "  .. Archiving website files in $webrootdir"
cd $webrootdir
if [ -f $tempdir/$tarname ]; then
echo "   .. A Archive with the same name was previously created on $datestamp."
echo "    .. Please Rename your Archive & Try Again!"
echo "     .. This Process will now EXIT!"
echo ""
cd $webrootdir
if [ -d $tarnamebase$sqlpre ]; then
rm -r $tarnamebase$sqlpre
fi
exit 0;
else 	
tar --exclude="./$dirname" -czf $tempdir/$tarname . &
wait
echo "   .. Archive Status - DONE"
echo ""
chmod 700 $tempdir/$tarname
fi
sleep 3
#
# CLEANUP LEFT OVERS
#
echo " Step 5 Cleaning up Remaining Files "
cd $webrootdir
if [ -d $tarnamebase$sqlpre ]; then
rm -r $tarnamebase$sqlpre
fi
echo "  .. Cleanup is Complete"
echo ""
sleep 3
echo " Step 6 Dispatching E-mail & Attachments"
if [ -z "$email" ]; then
echo "   .. E-Mail Alerts are Disabled - You can enable E-Mail alerts from the settings page."
elif [ -n "$email" ]; then
if [ -n "$attach" ]; then
echo "   ..E-Mail Alert & Archive Attachment Dispatched to $email"
(echo "Full Site Backup - $tarname is Complete & Attached to this Message. Your Backup has also been saved to the Following Directory - $tempdir";uuencode $tempdir/$tarname $tempdir/$tarname) | mail -s "Site Backup - $tarname" $email
elif [ -n "$email" ]; then
if [ -z "$attach" ]; then
echo "   ..Dispatching The E-Mail Alert to $email"
echo "Full Site Backup - $tarname is Complete. It has been saved to the Following Directory - $tempdir" | mail -s "Site Backup - $tarname" $email
fi
fi
fi
sleep 3
echo ""
echo " Step 7 Verify Backup"
if [ -f $tempdir/$tarname ]; then
echo "    ..Backup Successfully Created"
echo "     .. Full Site Backup - $tarname is Complete"
echo ""
echo " You may continue using your site now."
echo " Reminder - your Backup Archive is located in $tempdir"
echo ""
echo " Thank you for using WordPress EZ Backup"
echo " Please show your support and donate."
exit 0;
fi