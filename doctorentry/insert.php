<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR-ADD</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index.html"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

			</div>
		</div>
	</header> <!-- end of header area -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Add a new Doctor</h2>
					</div>

					<form class="form" action="connect.php" method="post" enctype="multipart/form-data" style="padding-left: 240px">

						<div class="col-md-7 col-md-offset-1 contact-form">

							<input type="text" name="id" placeholder="Doctor Id" style=" text-align: center; font-family: Georgia; font-size: 20px">
							<input type="text" name="name_1" placeholder="Name" style=" text-align: center; font-family: Georgia; font-size: 20px">
							<input type="text" name="category" placeholder="Category" style=" text-align: center; font-family: Georgia; font-size: 20px">
							<input type="email" name="email" placeholder="Email" style=" text-align: center; font-family: Georgia; font-size: 20px">
							

							<input type="date" name="date" placeholder="Date" style=" text-align: center; font-family: Georgia; font-size: 18px; height: 50px">
							<input type="time" name="time" placeholder="Time" style=" text-align: center; font-family: Georgia; font-size: 18px; height: 50px">
							<input type="file" name="image" id="image" style=" text-align: center; font-family: Georgia; font-size: 18px; height: 50px">

							<br>

								<input type="submit" name="enter" value="SUBMIT" style="font-family: Georgia; font-size: 18px; width:180px; height: 50px; background-color:blue">

								<a href="insert.php"><input value="CLEAR" style="text-align: center; font-family: Georgia; font-size: 18px; width:145px; height: 50px"></a>
							
								<a href="index.html"><input value="CANCEL" style="text-align:center; font-family: Georgia; font-size: 18px; width:150px; height:50px;"></a>
							


							<br><br><br>
						
						</div>
					</form>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

		<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;Mostafizur All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>