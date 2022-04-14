<?php 
include "baglan.php";
$id = 1;   
$query = $db->query("SELECT * FROM hakkimizda WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
                     
if(isset($_POST['btn_kaydet'])){
    $query = $db->prepare("UPDATE hakkimizda SET
		  	karpiemyazisi=:karpiemyazisi,
			kariyerplanlama=:kariyerplanlama,
			karpiemsureclerimiz=:karpiemsureclerimiz	,
			misyon=:misyon,
			vizyon=:vizyon,
			hosgeldiniz=:hosgeldiniz,
			

WHERE id = :id");

$update = $query->execute(array(
     'karpiemyazisi' => $_POST["karpiemyazisi"],
     'kariyerplanlama' => $_POST["kariyerplanlama"],
     'karpiemsureclerimiz' => $_POST["karpiemsureclerimiz"],
     'misyon' => $_POST["misyon"],
     'vizyon' => $_POST["vizyon"],
     'hosgeldiniz' => $_POST["hosgeldiniz"],
     "id" => $id
));
if ($update){
     echo'<script type="text/javascript"> alert("kayıt güncellendi");</script> ';
    header("Location: a-about-duzenle.php");
}
else{
    echo'<script type="text/javascript"> alert("hata");</script> ';
}
}
elseif(isset($_POST['btn_sil'])){
    
    
$query = $db->prepare("DELETE FROM hakkimizda WHERE id = :id");
$delete = $query->execute(array(
   'id' => $id
));
    if ( $delete ){
     echo'<script type="text/javascript"> alert("kayıt silindi");</script> ';
    header("Location: a-about-duzenle.php");
}
else{
    echo'<script type="text/javascript"> alert("hata");</script> ';
}    
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- my_profile_view_detail15:53:54 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Favicon -->
	<link href="images/logo_kare.png" rel="shortcut icon" type="image/x-icon"/>

    <title>Ostim Teknik Üniversitesi Mezun Platformu</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link rel="stylesheet" href="css/owlslider.css" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="upload_listing">
			 <!-- Banner -->
			 <form id="form" class="" action="haberler.php" name="form" method="POST">
					<div class="row">
						<div class="messages text-center col-md-11">
							Hakkımızda Düzenle
						<hr>
						</div>
					<div class="feedback col-md-10">
								<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Karpiem Yazısı
								</div>
								<input type="text" name="name" value="<?=$query['karpiemyazisi'] ?>" placeholder="Yazı Giriniz"> 
							</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Karpiem Planlama Yazısı
								</div>
								<input type="text" name="name" value="<?=$query['kariyerplanlama'] ?>" placeholder="Yazı Giriniz"> 
							</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Karpiem Süreçlerimiz
								</div>
								<input type="text" name="name" value="<?=$query['karpiemsureclerimiz'] ?>" placeholder="Yazı Giriniz"> 
							</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Misyon
								</div>
								<input type="text" name="name" value="<?=$query['misyon'] ?>" placeholder="Yazı Giriniz"> 
							</div>

							<div class="email-input">
								<div class="midemail">
								Vizyon
								</div>
								<input type="text" name="name" value="<?=$query['vizyon'] ?>" placeholder="Yazı Giriniz"> 
							</div>

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Hoş Geldiniz
								</div>
								<input type="text" name="name" value="<?=$query['hosgeldiniz'] ?>" placeholder="Yazı Giriniz"> 
							</div>
									
							<div class="sends">
							<input type="submit" name="btn_kaydet" value="Kaydet">
							<input type="submit" name="btn_sil" value="Sil">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				</form>
					<div class="clearfix"></div>
			</div>	
		</div>		  <!-- Banner Area-->
	</div>
    <!-- /#wrapper -->
	
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
	
    <!-- Demo scripts for this page-->
 	<script src="js/slick.min.js"></script>.
	 <!-- Assect scripts for this page-->
	<script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
	 <script src="assets/vendors/highlight.js"></script>
    <script src="assets/js/app.js"></script>
	<script type="text/javascript">
// Data Picker Initialization
$('.datepicker').datepicker();
</script>
	 </body>


<!-- my_profile_view_detail15:54:02 GMT -->
</html>



