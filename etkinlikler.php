<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Ostim Teknik Üniversitesi Mezun Platformu</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo_kare.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Mezun Girişi</h4>
			</div>
			<div class="modal-body customer-box">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Giriş Yap</a></li>
					<li><a href="#Registration" data-toggle="tab">Kayıt Ol</a></li>
					<li><a href="#FirmaKayit" data-toggle="tab">Firma Kayıt</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Email" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Şifre" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Giriş Yap
									</button>
									<a class="for-pwd" href="javascript:;">Şifremi unuttum</a>
								</div>
							</div>
						</form>
					</div><!-- giriş yap-->
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="İsim" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Telefon" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Şifre" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Kayıt Ol
									</button>
									
								</div>
							</div>
						</form>
					</div><!-- mezun kayıt-->
					<div class="tab-pane" id="FirmaKayit">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Firma İsmi" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Telefon" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Şifre" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Kayıt Ol
									</button>
									
								</div>
							</div>
						</form>
					</div><!-- firma kayıt-->
					
							</div>
						
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="ana-sayfa.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="ana-sayfa.php">Ana Sayfa</a></li>
						<li class="nav-item  active"><a class="nav-link" href="etkinlikler.php">ETKİNLİKLER</a></li>
						<li class="nav-item"><a class="nav-link" href="haberler.php">Haberler</a></li>
						 <li class="nav-item"><a class="nav-link" href="is-ilanlari.php">İş İlanları</a></li>
						 <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Hakkımızda </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="about.php">Hakkımızda</a>
								<a class="dropdown-item" href="calisanlar.php">Çalışanlar</a>
								<a class="dropdown-item" href="contact.php">İletişim</a>
							</div>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Giriş Yap</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Etkinlikler<span class="m_1">Birlikte mezun olduğun arkadaşlarınla tekrar bir araya gelmek ister misin?</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Yaklaşan etkinliklere katılarak eski dostlarınla bir araya gel.</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
             <?php
						include'baglan.php';
						
						$query = $db->query("SELECT * FROM etkinlikler", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                             foreach( $query as $row ){
                                if($row['aktif_mi']==1){?>  
               
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
                            <a href="etkinlik.php?getir=<?=$row['id']?>"><img src="images/blog_1.jpg" alt="" class="img-fluid"></a>
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="etkinlik.php?getir=<?=$row['id']?>" title=""><?php echo  $row['ust_baslik'] ?></a></h2>
							</div>
							<div class="course-rating">
								<i class="fa fa-location-arrow"></i>
								<?php echo  $row['konum'] ?>			
							</div>
							
						</div>
						<div class="course-meta-bot" style="margin-bottom: 20px">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo  $row['etkinlik_tarihi'] ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Katılımcı</li>
								
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->
                <?php }
                        }}
						
						?>
			</div><!-- end row -->
			
			<hr class="hr3"> 
        </div><!-- end container -->
    </div><!-- end section -->
    
    <footer class="footer" >
	<div class="container">
		<div class="row" >
			
			<div class="col-lg-3 col-md-3 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Sosyal Medya Hesaplarımız</h3>
					</div>
					<div class="footer-right">
						<ul class="footer-links-soi">
							<li><a href="https://www.linkedin.com/in/ostimteknikuni-karpiem-1b68691ab/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/okarpiem" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/ostimteknik_karpiem/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul><!-- end links -->
						<div class="widget-title">
					</div>
					</div>
				</div><!-- end clearfix -->
			</div><!-- end col -->
									
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>İletişim</h3>
					</div>

					<ul class="footer-links">
						<li><a href="mailto:#"><i class='fa fa-envelope-o'></i> karpiem@ostimteknik.edu.tr</a></li>
						<li><i class='fa fa-location-arrow'> </i>OSTİM Teknik Üniversitesi, Ostim/ANKARA</li>
						<li><i class='fa fa-phone'> </i> +90 312 386 10 92</li>
						
					</ul><!-- end links -->
				</div><!-- end clearfix -->
			</div><!-- end col -->
			
		</div><!-- end row -->
	</div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">                   
                <p class="footer-company-name">Tüm hakları saklıdır. &copy; 2022 <a href="#">Mezun Portalı</a> Bu site ostim teknik üniversitesi öğrencileri tarafından hazırlanmıştır.</p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>