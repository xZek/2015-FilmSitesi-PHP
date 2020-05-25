
<?php
 
    include_once("ayar.php");
 
    $gelen = $_GET['begenmeme'];
 
    $update = mysql_query("update konular set begenmeme=begenmeme+1 where id='$gelen'"); 
 ?>
<link rel="stylesheet" href="/filmler/izle/css.css">
<font color="aqua"></font>
