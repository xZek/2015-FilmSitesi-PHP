<?phpfunction generateHash() {
    $SecretKey = 'sizin-gizli-anahtariniz';
    return md5(sha1(md5($_SERVER['REMOTE_ADDR'] . $SecretKey . $_SERVER['HTTP_USER_AGENT'])));
}

$_SESSION['SessionHash'] = generateHash();
if(generateHash() !== $_SESSION['SessionHash']){
    //Çıkış yaptırın
}?>

<?php
 
    include_once("ayar.php");
 
    $gelen = $_GET['begen'];
 
    $update = mysql_query("update konular set begen=begen+1 where id='$gelen'"); 
 ?>
<link rel="stylesheet" href="/filmler/izle/css.css">
<font color="aqua"></font>
