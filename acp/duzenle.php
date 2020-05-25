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
<?php 

 require_once("ayar.php");
 ob_start();
 if($id = $_GET["id"]){
	if ($_POST){
		
		$query = mysql_query("select * from kategoriler where kategori_id = '$id'");
    if (mysql_affected_rows()){
		$row = mysql_fetch_array($query);
		
		function kategori ($id = 0, $string = 0){
	$query = mysql_query("select * from kategoriler where kategori_ustid = '$id'");
	if (mysql_affected_rows()){
		while ($row = mysql_fetch_array($query)){
			echo '<option value="'.$row["kategori_id"].'">'.$row["kategori_adi"].'<a hreF="duzenle.php?id='.$row["kategori_id"].'">Duzenle</a>"</option>';
			kategori($row["kategori_id"]);
		}
		}else {
			return false;
	}	
		}
		?>
		<form action="" method="post">
		<table cellpadding="5p" cellspacing=>
		<tr>
		<td>Kategori Adı:</td>
		<td><input type="text" name="katadi" value="<?php echo $row["katogori_adi"]; ?>"
		</tr>
		<tr>
		<td>Üst Kategori:</td>
		<td>
        <select name="ustkatid">
		<?php kategori();  ?>
		</select>
		</td>		
		</table>
	</form>
		<?php
	}else{
		header("Location: index.php");
	}		
	}
 }
?>
</body>
</html>
