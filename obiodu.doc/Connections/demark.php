<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_demark = "localhost";
$database_demark = "search";
$username_demark = "root";
$password_demark = "";
$demark = mysql_pconnect($hostname_demark, $username_demark, $password_demark) or trigger_error(mysql_error(),E_USER_ERROR); 
?>