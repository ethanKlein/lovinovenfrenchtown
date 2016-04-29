<?php

$hostname = "mysql.lovinovenmilford.com";   // eg. mysql.yourdomain.com (unique)
$username = "ethan";   // the username specified when setting-up the database
$password = "dank420";   // the password specified when setting-up the database
$database = "lovinoven";   // the database name chosen when setting-up the database (unique)

$link = mysql_connect($hostname,$username,$password);
mysql_select_db($database) or die("Unable to select database");

?>