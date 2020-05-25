<?php
 $host = "localhost";  //SERVER  SQL IP
 $user = "root";  // VERITABANI KULLANICI ISMI
 $pass = ""; // VERITABANI KULLANICI SIFRESI
 $db   = "film"; //VERITABANI ISMI
 
  $baglan = mysql_connect($host, $user, $pass) or die (mysql_error());
  mysql_select_db($db)  or die(mysql_error());
  
  mysql_query("SET CHARACTER SET'utf-8'");
  mysql_query("SET NAMES UTF8");
 ?>
