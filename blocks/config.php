<?php
$host="localhost:3306"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="b2b_portal"; // Database name
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>