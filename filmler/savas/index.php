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
 require_once("ayarlar.php");
  require("ayar.php");
function kategori ($id = 5){
	$query = mysql_query("select * from konular where kategori_ustid = '$id'");
	if (mysql_affected_rows()){
		while ($row = mysql_fetch_array($query)){  ?>
	<?php echo '<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6""><div class="demo">'; ?>
<p><img src="<?php echo $row["resimlink"]; ?>" height="100" width="100" align="left" ></img></p>
            <?php echo '<center><br>'.$row["konu_baslik"].'<a /a><br /></center>' ?>
			<?php echo '<p><center><a class="btn btn-default" href="/acp/ekle.php?id='.$row["id"].'"role="button"> IZLE</a></center>'; ?>
			<?php echo '</div></div></div>' ?>
<?php } ?>
<?php
		
		}else {
			return false;
	}	
		}
		kategori();

?>
     
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
     
        </div>
      </div>
    </div>
  </div>
	
       
 <?php include("licance.php"); ?>