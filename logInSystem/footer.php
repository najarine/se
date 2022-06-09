	<footer class="footer">
		<div class="f-width">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-4 col-xs-12">
					© superL.INK All Rights Reserved 2022
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<nav class="footer-nav text-right">	
						<ul class="nav-pills">
							<li style="border-right: 1px solid #444; padding: 0 8px 0 5px; display: inline-block;"><a href="#">Home</a></li>
							<li style="border-right: 1px solid #444; padding: 0 8px 0 5px; display: inline-block;"><a href="#">Feature</a></li>
							<li style="border-right: 1px solid #444; padding: 0 8px 0 5px; display: inline-block;"><a href="#">How to do</a></li>
							<li style="padding: 0px 8px 0 5px;"> <a class="mlogin vugichugi" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
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
														<form method="post" action="/login" accept-charset="UTF-8">
														<input id="email" class="form-control" type="text" placeholder="Email" name="email">
														<input id="password" class="form-control" type="password" placeholder="Password" name="password">
														<input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
														</form>
													</div>
													<div class="division">
														<div class="line l"></div>
														  <span>or</span>
														<div class="line r"></div>
													</div>
													<div class="social">
														<a class="circle github" href="/auth/github">
															<i class="fa fa-github fa-fw"></i>
														</a>
														<a id="google_login" class="circle google" href="/auth/google_oauth2">
															<i class="fa fa-google-plus fa-fw"></i>
														</a>
														<a id="facebook_login" class="circle facebook" href="/auth/facebook">
															<i class="fa fa-facebook fa-fw"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="box">
												<div class="content registerBox" style="display:none;">
													<div class="form">
														<form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
														<input id="email" class="form-control" type="text" placeholder="Email" name="email">
														<input id="password" class="form-control" type="password" placeholder="Password" name="password">
														<input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
														<input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
														</form>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<div class="forgot login-footer">
												<span>Looking to 
													 <a href="javascript: showRegisterForm();">create an account</a>
												?</span>
											</div>
											<div class="forgot register-footer" style="display:none">
												 <span>Already have an account?</span>
												 <a href="javascript: showLoginForm();">Login</a>
											</div>
										</div>        
									</div>
								</div>
							</div>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</footer>

	
<script type="text/javascript" src="scroling.js"></script>
	
	<!--Slider-->
<script type="text/javascript" src="slider.js"></script>

	
	
</body>
</html>
