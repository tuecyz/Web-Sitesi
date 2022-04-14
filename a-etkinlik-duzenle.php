<?php 
include "baglan.php";

$id = $_GET['duzenle']; 

$query = $db->query("SELECT * FROM etkinlikler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
                        
if(isset($_POST['btn_kaydet'])){
    $query = $db->prepare("UPDATE etkinlikler SET
ust_baslik = :ust_baslik,
konum = :konum,
etkinlik_tarihi = :etkinlik_tarihi,
metin = :metin

WHERE id = :id");

$update = $query->execute(array(
     "ust_baslik" => $_POST["ust_baslik"],
     "konum" => $_POST["konum"],
     "etkinlik_tarihi" => $_POST["etkinlik_tarihi"],
     "metin" => $_POST["metin"],
     "id" => $id
));
if ( $update ){
     echo'<script type="text/javascript"> alert("kayıt güncellendi");</script> ';
    header("Location: a-etkinlikler.php");
}
else{
    echo'<script type="text/javascript"> alert("hata");</script> ';
}
}
elseif(isset($_POST['btn_etkinlik_sil'])){
    
    
            $query = $db->prepare("DELETE FROM etkinlikler WHERE id = :id");
$delete = $query->execute(array(
   'id' => $id
));
    if ( $delete ){
     echo'<script type="text/javascript"> alert("kayıt silindi");</script> ';
    header("Location: a-etkinlikler.php");
}
else{
    echo'<script type="text/javascript"> alert("hata");</script> ';
}
    

    
}
elseif(isset($_POST['btn_etkinlik_aktif_pasif']))
{
    $aktiflik=0;
    if($query['aktif_mi']==0){
        $aktiflik=1;
    }
    else{
        $aktiflik=0;
    }
    $query = $db->prepare("UPDATE etkinlikler SET
    aktif_mi = :aktif_mi
    WHERE id = :id");

    $update = $query->execute(array(
     "aktif_mi" => $aktiflik,
     "id" => $id
    ));
    
    header("Location: a-etkinlikler.php");
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
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
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="upload_listing">
			 <!-- Banner -->
			 
			 <form action="" method="post">
			 
					<div class="row">
						<div class="messages text-center col-md-12">
							Etkinlik Düzenle
						<hr>
						</div>

					<div class="feedback col-md-10">
							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">
								Üst Başlık
								</div>
								<input type="text" value="<?=$query['ust_baslik'] ?>" name="ust_baslik" placeholder="Başlık Giriniz"> 
							</div>
							
							<div class="email-input">
								
								<div class="midemail">
								<img src="images/feedback/screen.png" alt=""> Resimler
								</div>

								</hr>

								<div class="loga">
										Haber Resimleri
									</div>
									<div class="imggallery">
										<img src="images/banner/01_cdp.jpg" alt="">
										<img src="images/banner/01_cdp.jpg" alt="">
										<img src="images/banner/01_cdp.jpg" alt="">
									</div>
								<div class="screnshot" id="OpenImgUpload">
									<button class="btn">Resim Seç</button>
									<input type="file" name="myfile">
								<br>
								<span>Maximum file size 1MB</span>
								</div>
								</hr>
							</div>
							
							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/1.png" alt="">
								Tarih
								</div>
								<input type="date" value="<?=$query['etkinlik_tarihi'] ?>" name="etkinlik_tarihi" style="
								margin-left: 50px;
								margin-top: 20px;
								height: 100%
								text-align: justify-al;
								margin-right: 50px;
								border: none;
								border-bottom: 1px #e8e8e8 solid  ">

							</div>
														
							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/4.png" alt="">
								Konum
								</div>
								<input type="text" value="<?=$query['konum'] ?>" name="konum" placeholder="Konum"> 
								  
							</div>
							

							<div class="email-input">
								<div class="midemail">
								<img src="images/feedback/img1.png" alt="">Metin
								</div>
                                <textarea id="summernote" name="metin"></textarea>
								<div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Buraya Yazı Yazın..',
        tabsize: 2,
        height: 100
      });
    $('#summernote').summernote('code', '<?=$query['metin'] ?>');
    </script>
							</div>
					
							<div class="sends">
							<input name="btn_kaydet" type="submit" value="Kaydet">
							<input name="btn_etkinlik_sil" type="submit" value="Etkinliği Sil">
							<input name="btn_etkinlik_aktif_pasif" type="submit" value="<?php if($query['aktif_mi']==1){?>Pasifleştir<?php }else{ ?>Aktifleştir<?php } ?>">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					</form>
				</div>
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


<!-- my_profile_view_detail15:54:02 GMT -->
</html>
