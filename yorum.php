<?php
require_once("ayar.php");
$id = $_GET["id"];
 ?>
<?php
$sorgu3 = mysql_query("SELECT *FROM yorumlar WHERE yorum_konu_id = '$id'");
$say3 = mysql_num_rows($sorgu3);
?>
<img src="/img/yorum-1.png" height="20" width="20"><?php echo $say3; ?>