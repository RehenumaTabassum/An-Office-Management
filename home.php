<?php
include "dbConnection.php";

	$query = "SELECT number FROM `members` WHERE type='m'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$mmale = $temp['number']; 

	$query = "SELECT number FROM `members` WHERE type='f'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$mfemale = $temp['number'];

	$query = "SELECT number FROM `members` WHERE type='t'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$mtotal = $temp['number'];

	$query = "SELECT number FROM `borrowers` WHERE type='m'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$bmale = $temp['number']; 

	$query = "SELECT number FROM `borrowers` WHERE type='f'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$bfemale = $temp['number'];

	$query = "SELECT number FROM `borrowers` WHERE type='t'";
	$getres = mysqli_query($conn, $query);

	$temp = mysqli_fetch_array($getres);
	$btotal = $temp['number'];

?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		-->
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>BSWO</title>
</head>

<body class="home">
<header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand ms-lg-3 ps-lg-3 pb-lg-0" href="home.php">
                    <img src="images/office logo.png" style="width: 80px; height:80px" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="min-width: 1000px;">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#"
                                style="text-decoration: none; display: inline-flex; margin-top: 0.2rem; margin-left: 1rem;">R&S WorkSpace Hub</a>
                            <a class="nav-link dropdown-toggle ps-0" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="display: inline-flex;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="executive_committee.php">Executive Committee</a></li>
                                <li><a class="dropdown-item" href="general_committee.php">General Committee</a></li>
                       
								<li><a class="dropdown-item" href="staff.php">Officers and staff</a></li>
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="activities.php">Activities</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="notice.php">Notice</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

						<li class="nav-item">
                            <a class="nav-link" href="email.php">Email</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>



	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images\11.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Office Management System</h3>
					<p style="font-size:20px;">R&S WorkSpace Hub</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images\22.jpg" alt="Second slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Office Management System</h3>
					<p style="font-size:20px;">Empowering Success through Seamless Organization: The Office Management System Revolution.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images\333.jpg" alt="Third slide">
				<div class="carousel-caption d-none d-md-block" style="border-radius: 10px; border: 3px solid #02b321">
					<h3>Office Management System</h3>
					<p style="font-size:20px;">Provides training and technical assistance for community empowerment and leadership development</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>

	<div class="container-fluid py-2 mt-5 bg-light">
		<div class="container py-5 mb-2">
			<div class="row">
				<div class="col-lg-6 mb-2">
					<h2 class="text-uppercase mb-3 font-weight-bold">ABOUT US</h2>
					<hr allign="center"
						style="height:6px; width:8%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
					<p class="fs-5">Streamline Office Solutions is a pioneering provider of innovative Office Management Systems, dedicated to revolutionizing business operations and enhancing productivity. Our journey began with a vision to simplify office management complexities, empowering organizations to focus on growth and success. With a diverse team of experts, we set out to create an integrated platform that optimizes workflows for businesses of all sizes.

Our user-centric approach ensures our Office Management System is intuitive and accessible to all, from executives to team members. Constant research keeps us at the forefront of technological advancements, offering clients the latest tools to stay ahead.

Our system encompasses robust features such as task and project management, seamless communication, document sharing, time tracking, and resource planning. By consolidating these functions, we enable businesses to streamline their operations effortlessly.

Customer satisfaction is paramount at Streamline Office Solutions. We recognize the uniqueness of each business and provide personalized support and solutions tailored to their specific needs.

Join us on a mission to transform your office operations. Experience the power of our Office Management System and elevate your business to new heights. Together, we will unlock your organization's full potential through enhanced productivity, seamless collaboration, and unparalleled success.</p>
					<br>
				</div>
				<div class="col-lg-6 mb-2">
					<div class="card">
						<img src="images/office final.jpg" class="rounded" alt="...">
					</div>
				</div>
			</div>
		</div>
	</div>


	

	<div class="row justify-content-center bg-light" style="height: 30px;">
		
	</div>

	<div class="row justify-content-center bg-light">
		<div class="col-auto" >
		</div>
	</div>

	<div class="row justify-content-center bg-light" style="height: 50px;">
		
	</div>



	<footer class="text-white py-3 mt-5" style="background-color: #9C344A;">

		<div class="container-fluid me-lg-5 px-lg-5">

			<div class="row px-lg-5">

				
				<div class="col-md-5 col-lg-5 col-xl-3 mx-auto mt-3" style="padding: 0rem 4rem;">
					<h5 class="text-uppercase mb-3 font-weight-bold">Communication</h5>
					<p>
					<h6 class="text-white">Address:</h6>
					<i class="fas fa-home mr-3"></i> 1st Floor, Gulshan 1,Dhaka-1206,Bangladesh
					</p>
					<p>
					<h6 class="text-white">Phone:</h6>
					<i class="fas fa-phone mr-3"></i> +6023344452622
					</p>
					<p>
					<h6 class="text-white">Email:</h6>
					<i class="fas fa-envelope mr-3"></i> info@r&sworkspacehub.org.bd
		

					</p>
				</div>

				<div class="col-md-2 col-lg-2 col-xl-4 mx-auto mt-3" style="padding: 0rem 4rem;">
					<h5 class="text-uppercase mb-3 font-weight-bold">Menu</h5>
					<p>
						<a href="home.php" class="text-white" style="text-decoration: none;"> Home</a>
						<br>
						<a href="about.php" class="text-white" style="text-decoration: none;"> About Us</a>
						<br>
						<br>
						<a href="activities.php" class="text-white" style="text-decoration: none;"> Activities</a>
						<br>
						<a href="gallery.php" class="text-white" style="text-decoration: none;"> Gallery</a>
						
						<br>
						<a href="notice.php" class="text-white" style="text-decoration: none;"> Notice</a>
						<br>
						<a href="contact.php" class="text-white" style="text-decoration: none;"> Contact</a>
					</p>
				</div>

			</div>

			<hr class="mb-4">

			<div class="row px-lg-5">

				<div class="col-md-7 col-lg-8 ps-lg-5">
					<p> ©2023 Office Management Socity. All Rights Reserved
					</p>

				</div>

				<div class="col-md-5 col-lg-4">
					<div class="text-center text-md-right">

					</div>

				</div>

			</div>

		</div>

	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

</body>

</html>