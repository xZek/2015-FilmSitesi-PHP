<?php require("ayar.php"); ?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<meta charset="	utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="desrciption" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/bootstrap.css">	
<title>ACP</title>
</head>
<body>
<center><img src="css/logo.png" height="100" width="180"></img></center>
<div id="genel">
<font color="red"><strong>KOMEDI BOLUMU</strong><bR><br><br></font>
<?php 
 require_once("ayarlar.php");
  require("ayar.php");
function kategori ($id = 1){
	$query = mysql_query("select * from konular where kategori_ustid = '$id'");
	if (mysql_affected_rows()){
		while ($row = mysql_fetch_array($query)){  ?>
	<?php echo '<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6""><div class="demo">'; ?>
<p><img src="<?php echo $row["resimlink"]; ?>" height="100" width="100" align="left" ></img></p>
            <?php echo '<center><br>'.$row["konu_baslik"].'<a /a><br /></center>' ?>
			<?php echo '<p><center><a class="btn btn-default" href="/acp/ekle.php?id='.$row["id"].'"role="button"> DÜZENLE</a></center>'; ?>
			<?php echo '</div></div></div>' ?>
<?php } ?>
<?php
		
		}else {
			return false;
	}	
		}
		kategori();

?>



</body>
</html>
