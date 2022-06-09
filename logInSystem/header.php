<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/font-style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/login-register.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/main.css">
        
		 
	   
	    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/login-register.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
    </head>
<body>
	<header class="header-background">
        <nav class="navbar navbar-default">
		  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><img src="img/superL.INKlogo.png" alt="logo" /></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Home</a></li>
						<li><a href="#feat">Feature</a></li>
						<li><a href="#">How to Video</a></li>
						<li> <a class="mlogin vugichugi2" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
						<div class="modal fade login" id="loginModal">
							<div class="modal-dialog login animated">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h2 class="modal-title">Login</h2>
									</div>
									<div class="modal-body">  
										<div class="box">
											<div class="content">
												<div class="error"></div>
												<div class="form loginBox">
													<form id="formId" method="POST" action="includes/login.inc.php" accept-charset="UTF-8">
													<input id="email" class="form-control" type="text" placeholder="Email" name="email" required>
													<input id="password" class="form-control" type="password" placeholder="Password" name="password">
													<hr/>
													<button name="pressed" class="btn btn-default btn-login" type="submit" value="Login">
														<span><i class="fa fa-lock" aria-hidden="true"></i></span>Sign in
													</button>
													
													</form>
												</div>
												
												<div class="division">
													
													  <span style>OR</span>
													
												</div>
												<div class="social" id="social">
													<ul>
														<a class="btn btn-block btn-social btn-google">
															<span class="fa fa-google"></span> <span class="gl">Google</span>
														</a>
														<a class="btn btn-block btn-social btn-facebook">
															<span class="fa fa-facebook"></span> <span class="fbk">Facebook</span>
														</a>
														<a class="btn btn-block btn-social btn-twitter">
															<span class="fa fa-twitter"></span> <span class="twt">Twitter</span>
														</a>
														
													</ul>
												</div>
											</div>
										</div>
										<div class="box">
											<div class="content registerBox" style="display:none;">
												
												<div class="form">
													<div class="forgot register-footer" style="display:none">
														<a href="javascript: showLoginForm();"> &#60; Back</a>
													</div>
													<p style="text-align:left;">Thanks for your interest in superL.INK. Use the form provided below to register and create an account. PLEASE NOTE: The username that you choose will become part of your permanent superL.INK.</p>
													<form method="POST" html="{:multipart=>true}" data-remote="true" action="includes/signup.inc.php" accept-charset="UTF-8">
													<input type="text" class="form-control" id="username" name="username" placeholder="Username (Permanent superL.INK)">
													<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
													<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
													<input id="email" class="form-control" type="text" placeholder="Email" name="email">
													<input type="text" class="form-control" id="confirm_user_email" name="confirm_user_email" placeholder="Confirm Email">
													<input id="password" class="form-control" type="password" placeholder="Password" name="password">
													
													<button class="btn btn-default btn-register" type="submit" value="Register" name="commit">
													<span><i class="fa fa-lock" aria-hidden="true"></i></span>Register</button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="box">
										<div class="content forgotpassBox" style="display:none;">
											<div class="form">
												<div class="forgot register-footer" style="display:none">
													<a href="javascript: showLoginForm();"> &#60; Back</a>
												</div>
											<form method="post" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
												<input id="email" class="form-control" type="text" placeholder="Email" name="email" required>
												<button class="btn btn-default btn-register" type="submit" value="Register" name="commit">
													<span><i class="fa fa-lock" aria-hidden="true"></i></span>Submit</button>
											</form>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<div class="forgot login-footer">
											<p><span>New Here?
												 <a href="javascript: showRegisterForm();">Click here to create an account</a>
											</span></p>
											<span>
											 <a href="javascript: forgotPassword();">Forgot Password?</a>
											</span>
										</div>
										
									</div>        
								</div>
							</div>
						</div>
					</ul>
				</div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
		<div class="container">
			<div class="jumbotron">
			  <h3 class="jumbh1"><i>introducing</i>
			  <br />
			  <strong>The ALL In ONE <br />Super URL</strong>
			  </h3>
			  <p>Create an intelligent custom link that routes <br />
			  your audience to all your online links and social <br />
			  networks</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Get started <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
			</div>
		</div>
	</header>