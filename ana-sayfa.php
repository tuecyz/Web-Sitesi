
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- <head> bitiş -->

<!-- </body> etiketi bitişinden hemen önce aşağıdaki dosyalari çağırıyoruz -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body class="host_version" > 
<script type="text/javascript">
        $(window).on('load', function() {
            $('#exampleModal').modal('show');
        });
    </script>

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Giriş</h4>
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

   	<!-- MODAL-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Duyuru</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bizi sosyal medya hesaplarımızdan takip edin!<br>
        <ul class="footer-links-soi">
							<li><a href="https://www.linkedin.com/in/ostimteknikuni-karpiem-1b68691ab/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/okarpiem" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/ostimteknik_karpiem/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul><!-- end links -->
      </div>

    </div>
  </div>
</div>
	<!-- END MODAL --> 
   
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
						<li class="nav-item  active"><a class="nav-link" href="ana-sayfa.php">Ana Sayfa</a></li>
						<li class="nav-item"><a class="nav-link" href="etkinlikler.php">ETKİNLİKLER</a></li>
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
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>GİRİŞ Yap</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/degisen2.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2><strong>Ostim Teknik Üniversitesi </strong> <br>Mezun Platformu</br> </h2>
										<p class="lead">Ostim Teknik Üniversitesi Mezun Platformuna Hoş Geldiniz. </p>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/k2.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">Ostim Teknik Üniversitesi <strong></strong>Mezun Platformu</h2>
										<p class="lead" data-animation="animated fadeInLeft">«Doğru işe doğru insan» felsefesi ile Kariyer Planlama sürecinde, iş hayatına hazırlayacağımız öğrencilerimizin bilinçli hazırlıkları ile istihdam oranlarımızla alacağımız başarılı sonuçların ülkemizin kalkınmasına değer katacağına inanıyoruz. </p>     
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>Kariyer Planlama</strong> <br>İş Başı Eğitim Ofisi Koordinatörlüğü</br></h2>
										<p class="lead" data-animation="animated fadeInLeft">Kariyer kişinin yaşamı boyunca devam eden dinamik sürecinde, mesleki ve yaşamsal rollerinin profesyonel olarak tüm unsurlarının dikkate alındığı hikâyeler dizisidir.</p>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3><font face="Serif" size="6">Kariyer Planlama ve İş Başı Eğitim Ofisi Koordinatörlüğü</font></h3>
                    <p class="lead"><font face="Serif" size="4">KARPİEM Koordinatörlüğü, hem üniversite öğrencilerimize hem de topluma katkı sağlayacak noktalarda verimli çalışmalar üretilebilmesi için geliştirdiği iş birliği modelleri ile öğrencilerimizin üniversite hayatında etkinliğini oldukça yüksek tutmayı hedefliyoruz.</font></p>
                    <p>
                        «Doğru işe doğru insan» felsefesi ile Kariyer Planlama sürecinde, iş hayatına hazırlayacağımız öğrencilerimizin bilinçli hazırlıkları ile istihdam oranlarımızla alacağımız başarılı sonuçların ülkemizin kalkınmasına değer katacağına inanıyoruz.
                    </p>
                </div>
            </div><!-- end title -->
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4><font face="Serif" size="6">OSTİM Teknİk ÜNİVERSİTESİ</font></h4>
                        <h2> <font face="Serif" size="5">KARPİEM MİSYON</font></h2>
                        <div style="text-align: justify;"> <font face="Serif" size="4">Dünya'nın değişen senaryosuna uyumlu, dinamik, vizyon sahibi, rekabetçi yapıya sahip ve alanında uzman öğrenci, mezun ve mensuplarımızın kariyer bilincini oluşturarak kariyer yolculuğunda, öz farkındalıklarını, tercihlerini, değerlerini, tutkularını ve potansiyel kariyer yollarınızı planlamakta yol arkadaşı olmak.</font></div>
                        <pre lang="html">

                        <a href="https://www.ostimteknik.edu.tr/kariyer-planlama-ve-is-basi-egitim-ofisi-koordinatorlugu-278/150" target="blank" class="hover-btn-new orange"><span>DAHA FAZLA BİLGİ EDİN</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/kariyer1.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/kariyer2.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4><font face="Serif" size="6">OSTİM Teknİk ÜNİVERSİTESİ</font></h4>
                        <h2> <font face="Serif" size="5">KARPİEM VİZYON</font></h2>
                        <div style="text-align: justify;"> <font face="Serif" size="4">Üniversitemizin tüm birim, akademik program ve akademisyenleriyle iş birliği yaparak öğrenci, mezun ve mensuplarımızın akademik, bilimsel, kültürel araştırma ve çalışmalarını yaratıcı düşünce ve inovasyon ile desteklemek, iş birliği paydaşlarımızla ‘Doğru İşe Doğru İnsan’ felsefesiyle yürüttüğümüz ilgi, yetenek ve beceriler doğrultusunda bireysel kariyer planlama sürecini yürüterek fark yaratmak.</font></div>
                        <pre lang="html">

                        <a href="https://www.ostimteknik.edu.tr/kariyer-planlama-ve-is-basi-egitim-ofisi-koordinatorlugu-278/150" target="blank" class="hover-btn-new orange"><span>DAHA FAZLA BİLGİ EDİN</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb page-section">
		<div class="container">
			 <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <font face="Serif" size="6">ÖZGEÇMİŞTEN ÖZ GELECEK TASARIMINA</font>
                    <h4></h4>
                    <font face="Serif" size="4">Bizim için kariyer planlama 1.sınıfta Kariyer Koçu ile öğrencimiz arasında kurulan bağın planlı bir gelişim yolcuğuna dönüşmesidir. Kariyer Planlama merkezi olarak, öğrencilerimizin veya mezunlarımızın gelişim potansiyeline, akademik durumuna, iş hayatındaki beklentilerine, hedeflerine ve teknolojik değişimin getirdiği yeni becerilere hakim olmalarına göre şekillenen bu yolculuğun sonunda başarılı olması için çalışıyoruz.
                        Öğrencilerimiz öz geçmişleriyle birlikte öz geleceklerini de hazırlatıyor, hayallerini kağıda geçirmelerini sağlıyoruz. Böylece hedeflerini netleştiriyor, onları bu hedefler ve daha fazlası doğrultusunda yönlendiriyoruz.</font>
                </div>
            </div><!-- end title -->
            <center><p>  <font face="Serif" size="6">KARPİEM SÜREÇLERİMİZ</font></p></center>
			<div class="timeline">
				<div class="timeline__wrap">
					<div class="timeline__items">                     
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>1</h2>
								<p>KARPİEM Öğrenci Bilgi Envanter Sistemi</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>2</h2>
								<p>Kariyer Planlama Süreci</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>3</h2>
								<p>İŞ’te Fırsat Programı</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-04">
								<h2>4</h2>
								<p>İŞ’te Gezi Programı</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-01">
								<h2>5</h2>
								<p>İŞ’te İK Programı</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-02">
								<h2>6</h2>
								<p>İşletme Network Ağı ve İşbirlikleri</p>
							</div>
						</div>
						<div class="timeline__item">
							<div class="timeline__content img-bg-03">
								<h2>7</h2>
								<p>Yetkinlik Bazlı Uygulamalı Atölye Çalışmaları</p>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">3127</p>
					<h3>Öğrenci</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">5</p>
					<h3>Etkinlikler</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">131</p>
					<h3>Öncü Firmalar</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                
                <h3>Başkanımızın Mesajı</h3>
                <p>Birlikte Öğrenecek Birlikte Üreteceğiz, Çünkü Dünya Bizi Bekliyor. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>Mustafa Kemal ATATÜRK </a>
                            </div>
                            <div class="desc">
                              
                                <p class="lead">Eğitimdir ki bir milleti ya hür, bağımsız, şanlı, yüksek bir topluluk halinde yaşatır; ya da milleti esaret ve sefalete terk eder. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>Benjamin Franklin </a>
                            </div>
                            <div class="desc">
                               
                                <p class="lead">Eğitilmemiş deha, işlenmemiş gümüşe benzer.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>Aristoteles</a>
                            </div>
                            <div class="desc">
                              
                                <p class="lead">Eğitimin kökleri acı, meyveleri tatlıdır. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>A. North Whitehead </a>
                            </div>
                            <div class="desc">
                              
                                <p class="lead">Eğitim, ferdin yaşama sanatını idrak edebilmesi için rehber olmalıdır.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>Cervantes </a>
                            </div>
                            <div class="desc">
                              
                                <p class="lead">İnsan eğitimle doğmaz; ama eğitimle yaşar.</p>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <a>Konfüçyüs </a>
                            </div>
                            <div class="desc">

                                <p class="lead">Eğitimli insanlar yapabileceklerinden fazlasını söylemeye utanırlar. </p>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
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
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>