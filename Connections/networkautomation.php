<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_networkautomation = "localhost";
$database_networkautomation = "networkautomation";
$username_networkautomation = "root";
$password_networkautomation = "";
$networkautomation = mysql_pconnect($hostname_networkautomation, $username_networkautomation, $password_networkautomation) or trigger_error(mysql_error(),E_USER_ERROR); 
?>