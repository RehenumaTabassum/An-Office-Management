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
								<li><a class="dropdown-item" href="staff.php">Officers and staff</a></li>
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="gallery.php">Activities</a>
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

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="container p-4 text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                    10px;">
                    <i class="fa-regular fa-address-card fa-3x" style="color: #990000;"></i>
                    <h5 class="mt-3">Address</h5>
                    <p style="color: #4f4f4f; font-weight: 500;">
                    1st Floor, Gulshan 1,Dhaka-1206,Bangladesh
                    </p>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="container p-4 text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                    10px;">
                    <i class="fa-solid fa-phone fa-3x" style="color: #990000;"></i>
                    <h5 class="mt-3">Phone no</h5>
                    <p style="color: #4f4f4f; font-weight: 500;">
                        +8802334452822
                        <br>
                        <br>
                    </p>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="container p-4 text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:
                    10px;">
                    <i class="fa-regular fa-envelope fa-3x" style="color: #990000;"></i>
                    <h5 class="mt-3">Email</h5>
                    <p style="color: #4f4f4f; font-weight: 500;">
                    info@r&sworkspacehub.org.bd
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    

    <div class="container" style="margin-top: 6rem;">
        <div class="row justify-content-center text-center">
            <h2 class="mb-3 font-weight-bold">Enter your message</h2>
            <hr allign="center"
                style="height:6px; width:10%; background-color:#990000; margin-top: 3px; margin-bottom:20px;">
        </div>
        <form class="row g-3 mt-1 p-3 fs-5">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Your Name (required)</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Your Email (required)</label>
                <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-6">
                <label for="inputSubject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="inputSubject">
            </div>
            <div class="col-md-6">
                <label for="inputPhone" class="form-label">Your Phone No</label>
                <input type="text" class="form-control" id="inputPhone">
            </div>
            <div class="col-md-12">
                <label for="inputMessage" class="form-label">Your Message</label>
                <textarea class="form-control" id="inputMessage" rows="8"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"
                    style="width: 150px; font-weight: bold; font-size: 20px;">Send</button>
            </div>
        </form>
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
						<a href="staff.php" class="text-white" style="text-decoration: none;"> R&S WorkSpace Hub</a>
						<br>
						<a href="executive_committee.php" class="text-white" style="text-decoration: none;"> Executive Committee</a>
						<br>
						<a href="general_committee.php" class="text-white" style="text-decoration: none;"> General Committee</a>
						<br>
						<a href="activities.php" class="text-white" style="text-decoration: none;"> Activities</a>
						<br>
						<a href="microfinance.php" class="text-white" style="text-decoration: none;"> Microfinance</a>
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