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
        <li><a href="#">Giris Yap</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kayıt Ol</a> 
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<nav>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="img/3.jpg" alt="thumb">
              <div class="carousel-caption"> </div>
            </div>
            <div class="item active"> <img class="img-responsive" src="img/1.jpg" alt="thumb">
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img class="img-responsive" src="img/2.jpg" alt="thumb">
              <div class="carousel-caption"> </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
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
<hr>
<center><img src="img/kategori.jpg" ></center>

          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
    <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/aksiyon/"><img class="btn btn-default" alt="" src="img/aksyon.png"></a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/bilimkurgu/"><img class="btn btn-default" alt="" src="img/bilimkurgu.png"></a></div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/komedi/"><img class="btn btn-default" alt="" src="img/Komedi.png"></a></div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/2015/"><br><img class="btn btn-default" alt="" src="img/2015.png"></a></div>	7
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/macera/"><br><img class="btn btn-default" alt="" src="img/macera.png"></a></div>	
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><a href="/filmler/savas/"><br><img class="btn btn-default" alt="" src="img/savas.jpg"></a></div>			
      </div>
    </div>
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