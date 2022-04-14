<!DOCTYPE html>
<html lang="en">

  
<!-- find_profiles15:54:03 GMT -->
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
    <link rel="stylesheet" href="css/icofont.html">
   <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


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
			<div class="col-md-5 col-xs-12 p-left p-right">
			 <div class="add-listing">
				<a href="a-haber-ekle.php">
				<img src="images/header/plus-ico.png" alt="">
				Haber Ekle</a>
			 </div>

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
			 <!-- Banner -->
				<div class="row">
					<div class="messages text-center col-md-12">
					Haberler
					<hr>
					</div>	
					<div class="left_side">
						<div class="search-main">
							<form>
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							<input type="text" name="search" placeholder="Haber başlığı girin..">
							</form>
						</div>
						<?php
						include'baglan.php';
						
						$query = $db->query("SELECT * FROM haberler", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                             foreach( $query as $row ){?>

						<div class="col-md-3 col-xs-12 col-sm-6 p-left">
							<div class="mainbox" style="min-height:450px">
								<div class="imgbox">
                                    <a href="haber.php?getir=<?=$row['id']?>"><img src="images/1.jpg" alt=""></a>
								</div>
								<div class="lefttext" style="min-height: 50px">
								
									<?php echo  $row['ust_baslik'] ?>
									<?php if($row['aktif_mi']==1){?>
                                    <p style="color:MediumSeaGreen">
									    Aktif
									</p>
                                    <?php }elseif($row['aktif_mi']==0){?>
                                    <p style="color:red">
									    Pasif
									</p>
                                    <?php }?>
								</div>
								<div class="righttext">
									<a href="a-haber-duzenle.php?duzenle=<?=$row['id']?>">Düzenle</a>
									
								</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
                        <?php }
                        }
						
						?>
					</div>
				
				</div>
				
		
		 <!--#Spiner-->
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
		<br />
		<br />
		<br />
		<br />
   <!--#Spiner-->
     	


    </div>
      <!-- /.content-wrapper -->
    </div>
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
   <script src="js/slick.min.js"></script>
  </body>


<!-- find_profiles15:54:34 GMT -->
</html>
