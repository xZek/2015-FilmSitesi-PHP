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

        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<nav>

    <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="filmkategori.php"><img class="btn btn-default" alt="" src="img/icon-1.jpg"></a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="dizikategori.php"><img class="btn btn-default" alt="" src="img/icon-2.jpg"></a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="hakkımızda.php"><img class="btn btn-default" alt="" src="img/icon-3.jpg	"></a></div>
       
      </div>
    </div>
  </div>
</div>


</div>
    <hr>
  </div>
  
<center><font size="15"><font color="#330000">TELIF HAKKI</font></font><br><br>
<center><font color="#cccccc">Sitemizde bulunan film, videolar, film fragmanları ve diğer tüm videolar çeşitli paylaşım ortamlarında da bulunmaktadır. Sitemiz sadece youtube.com, vk.com, mail.ru vb. sitelerde eklenmiş ve paylaşıma açılmış videoları yayınlamaktadır. Server'ımıza kesinlikle yükleme yapılmamaktadır. Bu yüzden sitemiz hiç bir yasal hükümlülüğe tabi tutulamaz. İstenildiği takdirde hak sahipleri videoların kaldırılması talebinde bulunabilirler.</font></font><br><br>

  <hr>
  </div>
  
<center><font size="15"><font color="#330000">HAKKIMIZDA</font></font><br><br>
<center><font color="#cccccc">Sitemiz PHP , MYSQL , HTML5 , CSS , Dreamweaver  ile  By Seriosdark kodlanmıştır. Tasarımı İse Adobe Photoshop CS6, Fireworks, Illustratör, Swish max 4 ile By Hybrid Tarafından yapılmıştır.Film Sitemizde Her türlü saldırı güvenliği bulunmaktadır.Bunun Yanı sıra gelismis bir admin control panelımız mevcuttur giris yapan arkadaslar kotu yorumlar yaptıgı taktırde ıp tespıtı ıle sıteye gırıs engelı verılmektedır. 	</font></font><br><br>

  <hr>
  </div>
  
<center><font size="15"><font color="#330000">MISYONUMUZ</font></font><br><br>
<center><font color="#cccccc">Halkımıza; çağın gerekliliklerine kaliteli ve etkin hizmet sunmak amacında yeniliklere açık genç kadromuz ile sizlere en kaliteli şekilde hizmet vermeyi amaçlıyoruz.
Kadromuz genç ekip oldugundan dolayı hatalarımız olabilir şimdiden kusurlarımız için özür dileriz.</font></font><br><br>
 <hr>
  </div>
  
<center><font size="15"><font color="#330000">ILETISIM</font></font><br><br>
<center><font color="#cccccc"><script language="javascript" src="http://iw.sitekodlari.com/i1/3261a1/r2/09092015-localhost-709a9g.js"></script><br /><br /></font></font><br><br>

 
  </div>
</div>
       
		
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
     
        </div>
      </div>
    </div>
  </div>
	
       
  
</div>

<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Realistic Space 2015-2016. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>