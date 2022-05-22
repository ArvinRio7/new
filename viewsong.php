	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Lyrics</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

		
		<!-- About Generic Start -->
		<div class="main-wrapper">


			<?php
            $addlyrics = simplexml_load_file('files/addsong.xml');
            if (isset($_REQUEST['Song'])) {

            foreach($addlyrics->Lyric as $Lyric) { 
            	if($Lyric->Song == $_REQUEST['Song']){

            	             
            ?> 	


			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<div class="container border-top-generic">
					<h3 class="about-title mb-30"> <?php echo $Lyric->Title; ?> </h3>
					<div class="row">
						<div class="col-md-12">
							<div class="img-text">
								<img src="img/a.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
								<p><?php echo $Lyric->SongBy." - ".$Lyric->Date; ?></p>
								<p><?php echo $Lyric->Lyrics; ?> </p>

								<a href="home.php#blog" class="primary-btn text-uppercase">Back</a>
							</div>
						</div>


					</div>
				</div>
			</section>
			<!-- End Generic Start -->	
			<?php
				}
            	}
            }
                    
            ?> 
	
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
	
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>
