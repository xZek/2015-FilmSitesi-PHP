<?php require("ayar.php"); ?>
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
<body>
<div id="genel">
<?php
$sorgu = mysql_query("SELECT * FROM konular");
while($cek = mysql_fetch_array($sorgu)){
	echo '<a href="video.php?id='.$cek["id"].'">'.$cek["konu_baslik"].'</a><br />';
	
}

?>
</div>
</body>
</html>
