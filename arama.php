<!-- CODER BY SERIOSDARK DESIGNER BY HYBRID   FILMLER VERITABANINDAN CEKILMEKTEDIR -->
<?php

	require("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php include("title.php"); ?></title>

<!-- CSS BASLANGIC -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- CSS BITIS -->
</head>
<body>
<nav>
 <?php include("tablo2.php"); ?>
</nav>
 <hr>
 
<?php
	require_once("ayarlar.php");
	$kelime = $_POST["kelime"];
	if(empty($kelime)){
		echo "Aranacak kelime boş olamaz.";
	}else{
		$sorgu = $baglan->query("SELECT * FROM konular WHERE baslik LIKE '%$kelime%'");
		$sayi = mysqli_num_rows($sorgu);
		if($sayi > 0){
			echo '<font color="green">Toplam '.$sayi.' konu bulundu.</font><br /><br />';
		
		}else{
			echo '<font color="red">Bu kelimeye göre hiç konu bulunamadı.</font><br /><br />';
		}
		while($listele = mysqli_fetch_array($sorgu)){ 
		$sorgu3 = mysql_query("SELECT *FROM yorumlar WHERE yorum_konu_id = '8'");
$say3 = mysql_num_rows($sorgu3);?>
		
		
           <p><img src="<?php echo $listele["resimlink"]; ?>" height="100" width="100" align="left" ></img></p><?php
			echo "<strong>Konu başlığı: </strong>".$listele["baslik"]."<br />";
			echo "<strong>Konu içeriği: </strong>".$listele["icerik"]."<br />";?><br>
			<?php echo '<img src="/img/view.png" height="20" width="20">'.$listele["izlenme"]; ?> 
<img src="/img/imdb2.ico" height="20" width="20"> <?php echo $listele["imdb"]; ?> 
<img src="/img/like.ico" height="20" width="20"> <?php echo $listele["begen"]; ?> 
<img src="/img/dislike.png" height="20" width="20"> <?php echo $listele["begenmeme"]; ?>
		<?php	echo '<p><center><a class="btn btn-default" href="/filmler/izle/video.php?id='.$listele["id"].'"role="button">İZLE</a></center>';
			echo "<hr>";
		
		}
	}
?><div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
     
        </div>
      </div>
    </div>
  </div>
	
       
 <?php include("aranan.php"); ?>