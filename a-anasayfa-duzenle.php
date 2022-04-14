<?php 
include "baglan.php";

$id = 1; 

$query = $db->query("SELECT * FROM anasayfa WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
                        
if(isset($_POST['btn_kaydet'])){
    $query = $db->prepare("UPDATE anasayfa SET
		  duyuru=:duyuru,
			ustslider=:ustslider,
			kariyerplanlamayazisi=:kariyerplanlamayazisi,
			misyon=:misyon,
			vizyon=:vizyon,
			ozgecmistenozgelecek=:ozgecmistenozgelecek,
			karpiemsurecbaslik=:karpiemsurecbaslik,
			karpiemsurecyazi=:karpiemsurecyazi,
			ogrencisayisi=:ogrencisayisi,
			etkinliksayisi=:etkinliksayisi,
			oncufirmalar=:oncufirmalar,
			baskaninmesaji=:baskaninmesaji,
			altsliderbaslik=:altsliderbaslik,
			altslideryazi=:altslideryazi

WHERE id = :id");

$update = $query->execute(array(
     'duyuru' => $_POST["duyuru"],
     'ustslider' => $_POST["ustslider"],
     'kariyerplanlamayazisi' => $_POST["kariyerplanlamayazisi"],
     'misyon' => $_POST["misyon"],
     'vizyon' => $_POST["vizyon"],
     'ozgecmistenozgelecek' => $_POST["ozgecmistenozgelecek"],
     'karpiemsurecbaslik' => $_POST["karpiemsurecbaslik"],
     'karpiemsurecyazi' => $_POST["karpiemsurecyazi"],
     'ogrencisayisi' => $_POST["ogrencisayisi"],
     'etkinliksayisi' => $_POST["etkinliksayisi"],
     'oncufirmalar' => $_POST["oncufirmalar"],
     'baskaninmesaji' => $_POST["baskaninmesaji"],
     'altsliderbaslik' => $_POST["altsliderbaslik"],
     'altslideryazi' => $_POST["altslideryazi"],
     "id" => $id
));
if ( $update ){
     echo'<script type="text/javascript"> alert("kayıt güncellendi");</script> ';
    header("Location: a-anasayfa-duzenle.php");
}
else{
    echo'<script type="text/javascript"> alert("hata");</script> ';
}
}

?>


<!DOCTYPE html>
<html lang="en">
 
<!-- Other15:58:59 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Favicon -->
	<link href="images/header/fav.png" rel="shortcut icon" type="image/x-icon"/>

    <title>Ostim Teknik Üniversitesi Mezun Platformu</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	 <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link rel="stylesheet" href="css/icofont.html">
   

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SL824GNHMH"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-SL824GNHMH');</script>

 <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  </head>

  <body id="page-top">

   <nav class="navbar navbar-expand-md navbar-light fixed-top sticky-top nav-menu">

     <div class="col-md-2 col-xs-12 p-left  p-right">

      <button  class="btn btn-link btn-sm text-white order-1 order-sm-0"  id="sidebarToggle" >
        <i class="fas fa-bars"></i>
      </button>
		<div class="logo">
			<a href="#">
			<img src="images/header/ostimteknik_logo.png"  style="height: 32px; width: 122px;"  alt="logo" >
			</a>
		</div>
	</div>
      <!-- Navbar -->
		<div class="col-md-5 col-xs-12 p-left  p-right">

		</div>
			<div class="col-md-5 col-xs-12 p-right p-right">

			 <div class="login popup"  onclick="signin()">
				
				<img src="images/header/u-icon.png" title="" alt="">
				Ayşenur
				<div class="popuptext1" id="signin">
							<div class="notfication-details">
								<div class="notification-info">
									<a href="ana-sayfa.html" >Çıkış Yap</a>
								</div><!--notification-info -->
							</div>
						 </div>
			 </div>
			</div>
    </nav>
    <div id="wrapper">
      <!-- Sidebar -->
	   <ul class="sidebar navbar-nav">
			<li class="nav-item active">
			<a href="a-anasayfa-duzenle.php"><img src="images/menu-icon/Homeicon.png" title="" alt=""> <div class="fos" id="foo">Ana Sayfa</div></a></li>
			<li><a href="a-etkinlikler.php"> <img src="images/menu-icon/favicon.png" title="" alt=""><div class="fos" id="foo4">Etkinlikler</div></a></li>
			<li> <a href="a-haberler.php"> <img src="images/menu-icon/eye.png" title="" alt=""><div class="fos" id="foo5">Haberler</div></a></li>
			<li><a href="a-is-ilanlari.php"><img src="images/menu-icon/card-payment.png" title="" alt=""> <div class="fos" id="foo7">İş İlanları</div></a></li>
			<li> <a href="a-calisanlar.php"><img src="images/menu-icon/user.png" title="" alt=""><div class="fos" id="foo9">Çalışanlar</div></a></li>
			<li> <a href="a-hakkimizda.php"><img src="images/menu-icon/Categoryicon.png" title="" alt=""><div class="fos" id="foo9">Hakkımızda</div></a></li>
			<li> <a href="a-ayarlar.php"><img src="images/menu-icon/setting.png" title="" alt=""><div class="fos" id="foo9">Ayarlar</div></a></li>
			
		  </ul>
		
			<div class="container-fluid">
				<div class="upload_listing">
			 <!-- Banner -->
            <form action="" method="post">
					<div class="row">
						<div class="messages text-center col-md-11">
							Ana Sayfa Düzenle
						<hr>
						</div>
					<div class="feedback col-md-10">
					<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Duyuru
								</div>
								<textarea id="summernote" name="duyuru"></textarea>
								<div id="summernote"></div>
    						<script>
      							$('#summernote').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote').summernote('code','<?=$query['duyuru'] ?>');
   							 </script>
							</div>


						<div class="email-input">
							<div class="loga">
									Slider Fotoğrafları
								</div>
								<div class="imggallery">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
									<img src="images/banner/01_cdp.jpg" alt="">
																	
								</div>
							<div class="screnshot" id="OpenImgUpload">
								<button class="btn">Dosya Seçin</button>
								<input type="file" name="myfile">
							<br>
							<span>Maximum file size 1MB</span>
							</div>
							</hr>
						</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Kariyer Planlama Yazısı
								</div>
								<textarea id="summernote2" name="kariyerplanlamayazisi"></textarea>
								<div id="summernote2"></div>
    						<script>
      							$('#summernote2').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote2').summernote('code','<?=$query['kariyerplanlamayazisi'] ?>');
   							 </script>
							</div>

								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Misyon
								</div>
								<textarea id="summernote3" name="misyon"></textarea>
								<div id="summernote3"></div>
    						<script>
      							$('#summernote3').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote3').summernote('code','<?=$query['misyon'] ?>');
   							 </script>
							</div>



								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Vizyon
								</div>
								<textarea id="summernote4" name="vizyon"></textarea>
								<div id="summernote4"></div>
    						<script>
      							$('#summernote4').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote4').summernote('code','<?=$query['vizyon'] ?>');
   							 </script>
							</div>



								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Öz Geçmişten Öz Gelecek 
								</div>
								<textarea id="summernote5" name="ozgecmistenozgelecek"></textarea>
								<div id="summernote5"></div>
    						<script>
      							$('#summernote5').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote5').summernote('code','<?=$query['ozgecmistenozgelecek'] ?>');
   							 </script>
							</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/menu-icon/Categoryicon.png" alt="">
								Karpiem Süreçlerimiz Sliderı
								</div>
								<div class="select-left">
									<div class="loga">
										Slider
									</div>
									<select>
										<option value="1">Slider 1</option>
										<option value="2">Slider 2</option>
										<option value="3">Slider 3</option>
									</select>
									<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Slider Yazı
								</div>
								<textarea id="summernote6" name="metin"></textarea>
								<div id="summernote6"></div>
    						<script>
									$('#summernote6').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote6').summernote('code','<?=$query['altslideryazi'] ?>');
   							 </script>
							</div>



								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Öğrenci Sayısı
								</div>
								<textarea id="summernote7" name="metin"></textarea>
								<div id="summernote7"></div>
    						<script>
      							$('#summernote7').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote7').summernote('code','<?=$query['ogrencisayisi'] ?>');
   							 </script>
							</div>

								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Etkinlikler
								</div>
								<textarea id="summernote8" name="metin"></textarea>
								<div id="summernote8"></div>
    						<script>
      							$('#summernote8').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote8').summernote('code','<?=$query['etkinlikler'] ?>');
   							 </script>
							</div>

									<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Öncü Firmalar
								</div>
								<textarea id="summernote9" name="metin"></textarea>
								<div id="summernote9"></div>
    						<script>
      							$('#summernote9').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote9').summernote('code','<?=$query['oncufirmalar'] ?>');
   							 </script>
							</div>


							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Başkanımızın Mesajı
								</div>
								<textarea id="summernote10" name="metin"></textarea>
								<div id="summernote10"></div>
    						<script>
      							$('#summernote10').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote10').summernote('code','<?=$query['baskaninmesaji'] ?>');
   							 </script>
							</div>


							<div class="email-input">
								<div class="midemail">
								<img src="images/menu-icon/Categoryicon.png" alt="">
								Alt Slider
								</div>
								<div class="select-left">
									<div class="loga">
										Alt Slider
									</div>
									<select>
										<option value="1">Slider 1</option>
										<option value="2">Slider 2</option>
										<option value="3">Slider 3</option>
									</select>
									<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Alt Slider
								</div>
								<textarea id="summernote11" name="metin"></textarea>
								<div id="summernote11"></div>
    						<script>
      							$('#summernote11').summernote({
       							 placeholder: 'Buraya Yazı Yazın..',
        							tabsize: 2,
       							 height: 100
      								});
      							$('#summernote11').summernote('code','<?=$query['altslideryazi'] ?>');
   							 </script>
							</div>
								</div>	
							</div>
							<div class="sends">
							<input type="submit" name="skaydet" value="Kaydet">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
                        </form>
				</div>
					<div class="clearfix"></div>
			</div>	
				
						<!-- /#wrapper -->
		</div>		  <!-- Banner Area-->
	</div>
			<!-- /.container-fluid -->
	
			<!-- Sticky Footer -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
		 <script src="js/you-listing.js"></script>
		 <script src="js/menurght.js"></script>
	 <script src="js/script.js"></script>
    <!-- Demo scripts for this page-->


  <script src="js/slick.min.js"></script>
  	
  </body>


<!-- Other15:58:59 GMT -->
</html>

