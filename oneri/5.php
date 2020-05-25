<!-- CODER BY SERIOSDARK DESIGNER BY HYBRID   FILMLER VERITABANINDAN CEKILMEKTEDIR -->
<?php
	require_once("ayarlar.php");
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
 <?php include("tablo.php"); ?>
<hr>
		 <?php
$sorgu = mysql_query("SELECT * FROM konular LIMIT 36,9");
while($cek = mysql_fetch_array($sorgu)){
?>
<?php echo '<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6""><div class="demo">'; ?>
<p><img src="<?php echo $cek["resimlink"]; ?>" height="100" width="100" align="left" ></img></p>
<?php echo '<center><br>'.$cek["konu_baslik"].'<a /a><br /></center>' ?>
<?php echo '<p><center><a class="btn btn-default" href="/filmler/izle/video.php?id='.$cek["id"].'"role="button">İZLE</a></center>'; ?><br>
<?php echo '<img src="/img/view.png" height="20" width="20">'.$cek["izlenme"]; ?> 
<img src="/img/imdb2.ico" height="20" width="20"> <?php echo $cek["imdb"]; ?> 
<img src="/img/like.ico" height="20" width="20"> <?php echo $cek["begen"]; ?> 
<img src="/img/dislike.png" height="20" width="20"> <?php echo $cek["begenmeme"]; ?>
<?php echo '</div></div></div>' ?>
<?php } ?>
       
		
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
     
        </div>
      </div>
    </div>
  </div>
	
       
 <?php include("licance5.php"); ?>