<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="desrciption" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>BASLIK</title>
</head>
<body><ul>
<?php 
 require_once("ayarlar.php");
  require("ayar.php");
function kategori ($id = 0, $string = 1){
	$query = mysql_query("select * from kategoriler where kategori_ustid = '$id'");
	if (mysql_affected_rows()){
		while ($row = mysql_fetch_array($query)){
			echo '<li>'.$row["kategori_adi"].'</li>';
			kategori($row["kategori_id"]);
		}
		}else {
			return false;
	}	
		}
		kategori();

?></ul>
</body>
</html>
