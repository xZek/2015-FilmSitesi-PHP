<?php
	$baglan = new mysqli("localhost", "root", "", "film");
	if($baglan->connect_error){
		echo "Bağlantı sırasında hata oluştu.";
	}
	$baglan->set_charset("utf8");
?>