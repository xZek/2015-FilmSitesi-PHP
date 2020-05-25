<?php
require_once("ayarlar.php");
require_once("ayar.php");
 ?>
 <!DOCTYPE html PUBLIC "">
 <html xwins="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<meta http-equiv="Content-Type" content="text/html;charset-UTF-8" />
<title>ACP | REALISTIC SPACE</title>
</head>
<body>
<center><img src="css/logo.png" height="100" width="180"></img></center>
<div id="genel">
<br /><br /><br />
<center>	
<form action="" method="post">
<textarea type="text"  class="form-control" name="konu_baslik" placeholder="FILMIN KONU BASLIGI" /></textarea>
<textarea type="text"  class="form-control" name="baslik" placeholder="FILMIN YAYINLANCAK BASLIGI" /></textarea>
<textarea  class="form-control" name="icerik" placeholder="FILMIN ICERIĞI"></textarea><br />
<textarea  class="form-control" name="videolink" placeholder="FILMIN VİDEO URL SI OR : http://ok.ru/videoembed/34600782509""></textarea>
<textarea  class="form-control" name="resimlink" placeholder="FILMIN RESIM KAYNAGI"></textarea>
<textarea  class="form-control" name="vizyoncikis" placeholder=" FILMIN VIZYONA CIKIS TARIHI	"></textarea><br>
<textarea  class="form-control" name="imdb" placeholder="IMDB PUANI	"></textarea>
<textarea  class="form-control" name="sure" placeholder="FILMIN SURESI	"></textarea>
<textarea  class="form-control" name="oyuncular" placeholder="FILMDEKI OYUNCULAR  [LINKTE OLUR]	"></textarea>	<br>
<textarea  class="form-control" name="yonetmen" placeholder="FILMDEKI Yonetmen  [LINKTE OLUR]	"></textarea>
<textarea  class="form-control" name="filmtur" placeholder="FILM ALTYAZIMI DUBLAJMI FRAGMAN MI"></textarea>
<textarea  class="form-control" name="kategori_id" placeholder="FILM TURU NEDIR ORNEK :  AKSIYON , BILIMKURGU..."></textarea><br>
<p><input type="submit"  class="btn btn-default" name="ekle" value="Fılmı Ekle" /></p>
</form></center>
<?php 
if(@$_POST["ekle"]){
       $yazan = $_POST["konu_baslik"];
	   $icerik = $_POST["icerik"];
	   $baslik = $_POST["baslik"];
	   $videolink = $_POST["videolink"];
	   $resimlink = $_POST["resimlink"];
	   $imdb = $_POST["imdb"];
	   $vizyoncikis = $_POST["vizyoncikis"];
	   $sure = $_POST["sure"];
	   $oyuncular = $_POST["oyuncular"];
	   $yonetmen = $_POST["yonetmen"];
	   $filmtur = $_POST["filmtur"];
	   $kategori_id = $_POST["kategori_id"];
	   if(empty($icerik) or empty($yazan)){
		   echo "Formda Boş Alan Olmamalı !";
		   }else{
			   $sorgu2 = mysql_query("INSERT INTO konular (konu_baslik, icerik, baslik, videolink, resimlink, imdb, vizyoncikis, sure, oyuncular,yonetmen,filmtur, kategori_id) VALUES ('$yazan', '$icerik', '$baslik', '$videolink', '$resimlink', '$imdb', '$vizyoncikis', '$sure', '$oyuncular', '$yonetmen', '$filmtur', '$kategori_id')");
	 if($sorgu2){
		 echo "FILMINIZ EKLENDI TESEKKURLER";
		    }else{
				echo "Hata: ".mysql_error();
	 }
   }
}
?></font>
</form>
</div>
</body>
</html>
