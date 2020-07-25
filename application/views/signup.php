<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>About Oxmo Tex BD</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">

  <!-- fancybox gallery -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/jquery.fancybox.min.css">

  <!-- Your custom styles -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
</head>
<body style="background-color: #E0E0E0;">


<div class="login_container" id="login">
	<div class="login_bg " style="background-image: url('<?= base_url();?>assets/img/email.png') ">

		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 col-sm-12 ">
					<div class="card shadow">
						<div class="row mx-0 h-100">
							

							<!-- <div class="col-md-5 h-100 login_left" style="background: url('<?= base_url();?>assets/img/dot_pattern.png') rgba(58, 177, 155, 0.7);">

								<div class=" left_container text-center d-flex justify-content-center align-items-center h-100" >
									<div>
										<h3 class="font-weight-bold white-text mb-md-4 mb-sm-2">Hello, Friend!</h3>
										<p class="small white-text mb-md-4 mb-sm-2" style="font-weight: 400">Enter Your Personal Details <br> and Start Journey With Us</p>
										<a href="#" class="btn btn-outline-white rounded-pill">Sign Up</a>
									</div>
								</div>
							</div> -->




							<div class="col-md-12 login_right">
								<div class="right_container text-center d-flex justify-content-center align-items-center h-100">
									<div class="w-75">
										<h2 class="font-weight-bold text-default mb-5">Sign Up!</h2>
										
										<form>
											<div class="input-group mb-3 p-1" style="background-color: #E0E0E0;">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroup-sizing-default">
														<i class="far fa-envelope"></i>
													</span>
												</div>

												<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Email">
											</div>


											<div class="input-group mb-3 p-1" style="background-color: #E0E0E0;">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroup-sizing-default">
														<i class="fas fa-lock"></i>
													</span>
												</div>
												
												<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Password">
											</div>

											<div class="input-group mb-3 p-1" style="background-color: #E0E0E0;">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroup-sizing-default">
														<i class="fas fa-lock"></i>
													</span>
												</div>
												
												<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Re-Password">
											</div>

											<!-- <a href="" title="" class="text-dark small">Forgot your password?</a> -->
											
											<div class="d-flex justify-content-center">
												<button class="btn btn-default rounded-pill mt-3" style="background-color: #E0E0E0;">Sign up</button>
											</div>
											
										</form>

										
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>

  <!-- fancybox js -->
  <script type="text/javascript" src="<?= base_url();?>assets/js/jquery.fancybox.min.js"></script>

  <!-- Mixitup js -->
  <script type="text/javascript" src="<?= base_url();?>assets/js/mixitup.min.js"></script>

  <!-- main js -->
  <script type="text/javascript" src="<?= base_url();?>assets/js/main.js"></script>

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
    $(document).ready(function(){
       var mixer = mixitup('.mix_container');
    });

  </script>

</body>
</html>
