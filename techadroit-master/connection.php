<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'techadro_users');
 define('DBPASS', 'ieee@pec.chd');
 define('DBNAME', 'techadro_users');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn, DBNAME);
 
 if ( !$conn ) {
  die("ion failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database ion failed : " . mysqli_error());
 }

?>