<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sephora.ma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="image/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<style type="text/css">
	#search {

}
		#search input[type="text"] {
    background: url(image/search-white.png) no-repeat 10px 6px #fcfcfc;
    border: 1px solid #d1d1d1;
    font: bold 12px Arial,Helvetica,Sans-serif;
    color: #bebebe;
    width: 150px;
    padding: 6px 15px 6px 35px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    }

#search input[type="text"]:focus {
    width: 200px;
    }
	</style>
	
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php
										$hostname = "localhost";
										$username = "root";
										$password = "";
										$databaseName = "dbpfa";

										// connect to mysql database

										$connect = mysqli_connect($hostname, $username, $password, $databaseName);

										// genre
										$query1 = "SELECT * FROM genre";
										$result1 = mysqli_query($connect, $query1);

										$genre1 = "";

										while($row1 = mysqli_fetch_array($result1))
										{
										    $genre1 = $genre1."<li><a href='produit.php?genre=$row1[0]'>$row1[1]</a></li>";
										}


										// categorie
										$query2 = "SELECT * FROM Categorie";
										$result2 = mysqli_query($connect, $query2);

										$cat = "";

										while($row2 = mysqli_fetch_array($result2))
										{
										    $cat = $cat."<li><a href='produit.php?cat=$row2[0]'>$row2[1]</a></li>";
										}


										// Marque
										$query3 = "SELECT * FROM Marque";
										$result3 = mysqli_query($connect, $query3);

										$marq = "";

										while($row3 = mysqli_fetch_array($result3))
										{
										    $marq = $marq."<li><a href='produit.php?marq=$row3[0]'>$row3[1]</a></li>";
										}
										?>
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Livraison gratuite pour les commandes au dela de 1000 DH
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						webmaster@sephora.ma
					</span>

				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="image/logo.jpg" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Accueil</a>
							</li>

							<li class="sale-noti">
								<a href="produit.php">Shop</a>
							</li>

							<li >
								<a>Marque</a>
								<ul class="sub_menu">
									<?php echo $marq; ?>
								</ul>
							</li>

							<li>
								<a>Categorie</a>
								<ul class="sub_menu">
									<?php echo $cat; ?>
								</ul>
							</li>

							<li>
								<a>Genre</a>
								<ul class="sub_menu">
									<?php echo $genre1; ?>
								</ul>
								
							</li>

							<li>
								<a href="about.php">A propos</a>
							</li>

							<li>
								<a href="contact.php">Contactez Nous</a>
							</li>

							<li style="margin-left: 20px;"> 
								<form method="get" action="/search" id="search">
	  								<input name="q" type="text" size="20" placeholder="Recherche ..." />
								</form>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				 <div class="header-icons">
                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">


                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">
                                    <li class="header-cart-item">



                                        <?php
                                        if ($_SESSION["act"] === "false") {
                                            include "./Tomplet/conercter.php";
                                        } else {


                                            include "./Tomplet/deconercter.php";
                                        }
                                        ?>  

                                    </li>




                                </ul>




                            </div>
                        </div>


                        <span class="linedivide1"></span>

                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <span class="header-icons-noti"><?php echo count($_SESSION["tab"]); ?></span>

                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">
                                    <?php 
                                    
                                     for($i=0;$i<count($_SESSION["tab"]);$i++)
                                     {
                                          $produitpanier=$produitSer->AffihcerProduitByidform($_SESSION["tab"][$i][0]);
                                          $dpanier = $produitformat->RechercherBYIdform($_SESSION["tab"][$i][0]);
                                      
                                    echo '<li class="header-cart-item">
                                        <div class="header-cart-item-img">
                                            <img src="upload/'.$dpanier->Getphoto().'" alt="IMG">
                                        </div>

                                        <div class="header-cart-item-txt">
                                            <a href="#" class="header-cart-item-name">
                                                '.$produitpanier->Getnompro().' 

                                            </a>

                                            <span class="header-cart-item-info">
                                                 </span>
                                        </div>
                                    </li>
                                  ';
                                     }
                                   
                                    ?>
                                    
                                
                                </ul>

                                <div class="header-cart-total">
                                    Total: <?php echo $panier->PrixTotal(); ?>
                                </div>

                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            View Cart
                                        </a>
                                    </div>

                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
		</div>

		<!-- Header Mobile -->
	   <div class="wrap_header_mobile">
                <!-- Logo moblie -->
                <a href="index.html" class="logo-mobile">
                    <img src="images/icons/logo.png" alt="IMG-LOGO">
                </a>

                <!-- Button show menu -->
                <div class="btn-show-menu">
                    <!-- Header Icon mobile -->
                    <div class="header-icons-mobile">
                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">


                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">
                                    <li class="header-cart-item">




<?php
if ($_SESSION["act"] === "false") {
    include "./Tomplet/deconercter.php";
} else {
    include "./Tomplet/conercter.php";
}
?>  


                                    </li>




                                </ul>




                            </div>
                        </div>

                        <span class="linedivide2"></span>

                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <span class="header-icons-noti"><?php echo count($_SESSION["tab"]); ?></span>

                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">
                                    <?php 
                                    
                                     for($i=0;$i<count($_SESSION["tab"]);$i++)
                                     {
                                          $produitpanier=$produitSer->AffihcerProduitByidform($_SESSION["tab"][$i][0]);
                                          $dpanier = $produitformat->RechercherBYIdform($_SESSION["tab"][$i][0]);
                                      
                                    echo '<li class="header-cart-item">
                                        <div class="header-cart-item-img">
                                            <img src="upload/'.$dpanier->Getphoto().'" alt="IMG">
                                        </div>

                                        <div class="header-cart-item-txt">
                                            <a href="#" class="header-cart-item-name">
                                                '.$produitpanier->Getnompro().' 

                                            </a>

                                            <span class="header-cart-item-info">
                                                 </span>
                                        </div>
                                    </li>
                                  ';
                                     }
                                   
                                    ?>

                                </ul>

                                <div class="header-cart-total">
                                     Total: <?php echo $panier->PrixTotal(); ?>
                                </div>

                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            View Cart
                                        </a>
                                    </div>

                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </div>
                </div>
            </div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Livraison gratuite pour les commandes au dela de 1000 DH
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								webmaster@sephora.ma
							</span>

							
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Accueil</a>
					</li>

					<li class="item-menu-mobile">
						<a href="produit.php">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a>Marque</a>
						  <ul class="sub-menu">
							<?php echo $marq; ?>
						  </ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a>Categorie</a>
						  <ul class="sub-menu">
							<?php echo $cat; ?>
						  </ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a>Genre</a>
						  <ul class="sub-menu">
							<?php echo $genre1; ?>
						  </ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">A propos</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Contactez Nous</a>
					</li>
					<li  class="item-menu-mobile"> 
								<form method="get" action="/search" id="search" style="text-align: center;">
	  								<input name="q" type="text" size="20" placeholder="Recherche ..." />
								</form>
					</li>
				</ul>
			</nav>
		</div>
	</header>