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
			echo "<strong>Konu başlığı: </strong>".$listele["baslik"]."<br />";
			echo "<strong>Konu içeriği: </strong>".$listele["icerik"]."<br /><br />";
		}
	}
?>