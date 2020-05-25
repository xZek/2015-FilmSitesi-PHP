<?php
require_once("ayar.php");
$id = $_GET["id"];
 ?>
 <!DOCTYPE html PUBLIC "">
 <html xwins="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset-UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>KONU</title>
</head>
<body>
<div id="genel">
<?php
$sorgu = mysql_query("SELECT * FROM konular WHERE id = '$id'");
$cek  = mysql_fetch_array($sorgu);
?>
<br /><br /><br />

<form action="" method="post">
<input type="text"  class="form-control" name="yorum_yazan" placeholder="Ad Soyad" /><br />
<textarea  class="form-control" name="yorum_icerik" placeholder="Yorum..."></textarea><br />
<input type="submit"  class="btn btn-default" name="yorum" value="Yorum Yaz" />
</form>
<?php 
if(@$_POST["yorum"]){
       $yazan = $_POST["yorum_yazan"];
	   $icerik = $_POST["yorum_icerik"];
	   if(empty($icerik) or empty($yazan)){
		   echo "Formda Boş Alan Olmamalı !";
		   }else{
			   $sorgu2 = mysql_query("INSERT INTO yorumlar (yorum_yazan, yorum_konu_id, yorum_icerik) VALUES ('$yazan', '$id', '$icerik')");
	 if($sorgu2){
		 echo "YORUMUNUZ ALINDI TESEKKURLER";
		    }else{
				echo "Hata: ".mysql_error();
	 }
   }
}
$sorgu3 = mysql_query("SELECT *FROM yorumlar WHERE yorum_konu_id = '$id'");
$say3 = mysql_num_rows($sorgu3);
?>
<font color="#669999"><?php
while($cek3 = mysql_fetch_array($sorgu3)){
?><?php echo "<br><br>".$cek3["yorum_yazan"]. "</b>:";
echo "<b>".$cek3["yorum_icerik"]. "";
}
?></font>
</form>
</div>
</body>
</html>
