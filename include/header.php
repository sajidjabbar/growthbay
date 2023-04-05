<body>
	<div class="topbar">
		<div class="container">
			<div class="finderBox">
				<div class="listIco">
					<a href="#" class="listItem">
						<img src="./images/top-icon1.png" alt="">
					</a>
					
					<a href="#" class="listItem">
						<img src="./images/top-icon2.png" alt="">
					</a>
					
					<!--<a href="#" class="listItem">-->
					<a class="btn btn-theme blue" data-toggle="modal" data-target="#appointmentModal">
						<img src="./images/top-icon3.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<header class="headerDv" id="top">
		<div class="container">
			<div class="logo">
				<a href="index.php" class="logoTop">
					<img src="./images/logo.png" alt="">
				</a>
			</div>
	
			<div class="navBarDv">
				<ul class="mainNav">
					<li>
						<a href="company.php">
							About us
						</a>
					</li>
	
					<li>
						<a href="funding.php">
							Funding Solutions
						</a>
					</li>
	
					<li>
						<a href="marketing.php">
							Marketing Solutions
						</a>
					</li>
	
					<li>
						<a href="technology.php">
							Technology Solutions
						</a>
					</li>
	
					<!-- <li>
						<a href="services.php">
							Services
						</a>
					</li> -->
	
					<!-- <li>
						<a href="#">
							INSIGHTS
						</a>
					</li> -->
	
					<li class="d-none">
						<a href="#">
							Contact
						</a>
					</li>
				</ul>
			</div>

			<div class="infoBtns">
				<div class="btngroups">
					<a class="btn btn-theme blue" href="" data-toggle="modal" data-target="#requestModal">
						Connect with us
					</a>

					<a class="btn btn-theme" href="" data-toggle="modal" data-target="#login">
						<span class="beforeIcon d-none">
							<img src="./images/top-icon4.png" alt="">
						</span>
						
						LOGIN
					</a>
				</div>
			</div>	
		</div>
	</header>

	

	<div class="headerBar">
		<div class="container">
			<h4>
				We are here to help !! GrowthBay partnerswith small businesses accelerate their growth rate
			</h4>
		</div>
	</div>

	<!-- The Modal -->
	<div class="modal" id="requestModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Connect with Us</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" id="mod-fname">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" id="mod-lname">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" id="mod-phone">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="text" id="mod-email">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label>Business for Idea Name</label>
									<input type="text" id="mod-ideaName">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label>Stage You Are In</label>
									<input type="text" id="mod-stage">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label>Quick Pitch</label>
									<textarea type="text" id="mod-quick"></textarea>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="confiText">
									<h4>100% Secure and <span class="orange">Confidential</span></h4>
								</div>
								<button class="btn btn-mod-submit">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- The Modal -->
	<div class="modal" id="appointmentModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Fix Appointment</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="#">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Select a Date & Time</label>
									<input type="datetime-local" id="birthdaytime" name="birthdaytime">
								</div>
							</div>
							
							<div class="col-md-12">
								<button class="btn btn-mod-submit">
									Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="modal" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title text-center">Sign In</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="#">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Email</label>
									<input type="text"  id="email" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" id="password" class="form-control">
								</div>
							</div>
							
							<div class="col-md-12 text-center">
								<button type="button" class="btn btn-primary">
									Login
								</button>
								<button type="button" class="btn btn-primary">
									Sign up
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>