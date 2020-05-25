<?php
require_once("ayar.php");
$id = $_GET["id"];
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php include("title.php"); ?></title>
 <script type="text/javascript" src="http://savascanaltun.com/jq/jquery-1.9.1.js"></script>
 

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<nav>
 <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="#"><img src="/img/logo.png" width="122" height="64"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"></li>
        <li></li>
      </ul>
      <form class="navbar-form navbar-right" action="arama.php" method="post" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="kelime" placeholder="Arıyacagınız Filmin Ismi">
        </div>
        <button type="submit" name="ara" value="Ara" class="btn btn-default">Ara</button>
      </form>
      <ul class="nav navbar-nav navbar-right hidden-sm">
        
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 

        
<br><br><?php
$sorgu = mysql_query("SELECT * FROM konular WHERE id = '$id'");
$cek  = mysql_fetch_array($sorgu);
?>		
<?php
$sql = mysql_query("Select * from konular Where id = '$id'"); 
$sql_sayi = mysql_num_rows($sql);
if($sql_sayi>0) 
{ 
while($sql_yaz=mysql_fetch_array($sql)) 
{ 
$goruntulenme_sayisi = $sql_yaz['izlenme']; 
} 
$goruntulenme_sayisi = $goruntulenme_sayisi + 1; 
$update_et = mysql_query("update konular set izlenme='$goruntulenme_sayisi' Where id ='$id'"); 
} 
else 
{ 
//yeni kayıt; 
}  ?>
<?php
$sorgu3 = mysql_query("SELECT *FROM yorumlar WHERE yorum_konu_id = '$id'");
$say3 = mysql_num_rows($sorgu3);
?>
<div class="col-sm-4 col-md-4 col-lg-4 col-xs-6"">
<p><a class="btn btn-default"  href="/filmler/izle/video.php?id=<?php echo $cek["id"]; ?>" role="button">Turkce <?php echo $cek["filmtur"]; ?> Izle</a><br></p
<center><iframe width="1000" height="420" src="<?php echo $cek["videolink"]; ?>" frameborder="0" allowfullscreen></iframe><br><br>
  <a href="/filmler/izle/video.php?id=<?php echo $cek["id"]; ?>" target="_blank"><img src="<?php echo $cek["resimlink"]; ?>" height="270" width="280" align="left" ></img></a> 
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><font color="#669999"> <p> <strong><h3><?php echo $cek["konu_baslik"]; ?></h3></strong>
<img src="/img/imdb2.ico" height="20" width="20"> <?php echo $cek["imdb"]; ?><br>
		<br>	<img src="/img/icon1.jpg" height="20" width="20"> <?php echo $cek["vizyoncikis"]; ?><br><br><img src="/img/time.png" height="20" width="20"> <?php echo $cek["sure"]; ?><br>
			<br><img src="/img/team.png" height="20" width="20">  <?php echo $cek["oyuncular"]; ?><br><br>
			<img src="/img/owner.png" height="20" width="20"> <?php echo $cek["yonetmen"]; ?><br>
			<br><img src="/img/view.png" height="20" width="20">  <?php echo $cek["izlenme"]; ?></img>  <img src="/img/yorum-1.png" height="20" width="20"><?php echo $say3; ?><img src="/img/like.ico" height="20" width="20">  <?php echo $cek["begen"]; ?>        <td> <a href="begen.php?begen=<?php echo "$id"; ?>" target="blank">Like</a></td> <img src="/img/dislike.png" height="20" width="20">  <?php echo $cek["begenmeme"]; ?> <td> <a href="begenme.php?begenmeme=<?php echo "$id"; ?>" target="_blank">Dislike</a></td><br>
			<br>Filmin Konusu:<?php echo $cek["icerik"]; ?></p></div></font>
			</p>
</div>

</body>
</html><?php
function generateHash() {
    $SecretKey = 'sizin-gizli-anahtariniz';
    return md5(sha1(md5($_SERVER['REMOTE_ADDR'] . $SecretKey . $_SERVER['HTTP_USER_AGENT'])));
}?>
<?php 
$sorgu4 = mysql_query("SELECT * FROM konular ORDER BY id asc");
    while ($cek2 = mysql_fetch_array($sorgu4)) {

        $begen = $cek2['begen'];
		$begenmeme = $cek2['begenmeme'];
    }
 
?>

<form action="begen.php" method="POST">
<table>
    <tr>

    </tr>
    <tr>
     
    </tr>
</table>
</form>

<?php include("yorum.php"); ?>
</form>
</div>
