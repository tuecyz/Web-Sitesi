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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
				<h4 class="modal-title">Customer Login</h4>
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
						<li class="nav-item"><a class="nav-link" href="etkinlikler.php">ETKİNLİKLER</a></li>
						<li class="nav-item"><a class="nav-link" href="haberler.php">Haberler</a></li>
						 <li class="nav-item"><a class="nav-link" href="is-ilanlari.php">İş İlanları</a></li>
						 <li class="nav-item dropdown   active">
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
			<h1>OSTİM TEKNİK ÜNİVERSİTESİ<span class="m_1">MEZUN ÖĞRENCİ PLATFORMU</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>KARPİEM</h3>
                    <p class="lead">KARPİEM Koordinatörlüğü, hem üniversite öğrencilerimize hem de topluma katkı sağlayacak noktalarda verimli çalışmalar üretilebilmesi için geliştirdiği iş birliği modelleri ile öğrencilerimizin üniversite hayatında etkinliğini oldukça yüksek tutmayı hedefliyoruz.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>Kariyer Planlama ve İş Başı Eğitim Ofisi Koordinatörlüğü</h4>
                        <h2></h2>
                        <p>«Doğru işe doğru insan» felsefesi ile Kariyer Planlama sürecinde, iş hayatına hazırlayacağımız öğrencilerimizin bilinçli hazırlıkları ile istihdam oranlarımızla alacağımız başarılı sonuçların ülkemizin kalkınmasına değer katacağına inanıyoruz.</p>

                        <p> Özgeçmişten Öz Gelecek Tasarımına<br>

                            Bizim için kariyer planlama 1.sınıfta Kariyer Koçu ile öğrencimiz arasında kurulan bağın planlı bir gelişim yolcuğuna dönüşmesidir. Kariyer Planlama merkezi olarak, öğrencilerimizin veya mezunlarımızın gelişim potansiyeline, akademik durumuna, iş hayatındaki beklentilerine, hedeflerine ve teknolojik değişimin getirdiği yeni becerilere hakim olmalarına göre şekillenen bu yolculuğun sonunda başarılı olması için çalışıyoruz. </p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="https://www.ostimteknik.edu.tr/content/upload/pages/neden-20190520141746.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="https://oidb.ostimteknik.edu.tr/wp-content/uploads/2019/07/oidb1-1508x500.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>KARPİEM Süreçlerimiz</h2>
                        <p>

                            1.KARPİEM Öğrenci Bilgi Envanter Sistemi<br>
                            2.Kariyer Planlama Süreci<br>
                            3.İŞ’te Fırsat Programı<br>
                            4.İŞ’te Gezi Programı<br>
                            5.İŞ’te İK Programı<br>
                            6.İşletme Network Ağı ve İşbirlikleri<br>
                            7.Yetkinlik Bazlı Uygulamalı Atölye Çalışmaları</p>

                        <p> </p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div class="hmv-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
						<h3>MİSYON</h3>
						<div class="tr-pa">M</div>
						<p>
                            Dünya'nın değişen senaryosuna uyumlu, dinamik, vizyon sahibi, rekabetçi yapıya sahip ve alanında uzman öğrenci, mezun ve mensuplarımızın kariyer bilincini oluşturarak kariyer yolculuğunda, öz farkındalıklarını, tercihlerini, değerlerini, tutkularını ve potansiyel kariyer yollarınızı planlamakta yol arkadaşı olmak.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
						<h3>VİZYON</h3>
						<div class="tr-pa">V</div>
						<p>Üniversitemizin tüm birim, akademik program ve akademisyenleriyle iş birliği yaparak mezunlarımızın akademik, bilimsel, araştırma ve çalışmalarını yaratıcı düşünce ve inovasyon ile desteklemek, iş birliği paydaşlarımızla ‘Doğru İşe Doğru İnsan’ felsefesiyle yürüttüğümüz yetenek ve beceriler doğrultusunda bireysel kariyer planlama sürecini yürüterek fark yaratmak.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="inner-hmv">
						<div class="icon-box-hmv"><i class="flaticon-history"></i></div>
						<h3>HOŞ GELDİNİZ</h3>
						<div class="tr-pa">H</div>
						<p> “Doğru işe, doğru insan” felsefesiyle yola çıktığımız Bireysel Kariyer Planlama sürecinde, İş Yeri Deneyimi programı kapsamında iş hayatına hazırlayacağımız öğrencilerimizin bilinçli farkındalıklarını artırarak kişisel ve mesleki gelişimlerinde, kendilerini tanımalarını sağlayarak kariyer yolculuklarında stratejik bir rol alıyoruz.<br>
                            OSTİM Teknik Üniversitesi ailesine hoş geldiniz</p>
					</div>
				</div>
			</div>
		</div>
	</div>
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
