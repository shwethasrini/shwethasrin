<?php
$servername= "localhost";
$databasename="varsha";
$database_username="root";
$database_password="tiger";
echo $servername;
echo <br />
echo $databasename;
echo <br />
echo $database_username;
echo <br />
echo $database_password;
echo <br />
$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("Error conecting to the database");
?>
