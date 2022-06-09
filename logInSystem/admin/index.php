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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        
		 
	   
	    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
		<!--<div class="container">
			<div class="row">
				<h2>Create your snippet's HTML, CSS and Javascript in the editor tabs</h2>
			</div>
		</div>-->
		<div id="throbber" style="display:none; min-height:120px;"></div>
		<div id="noty-holder"></div>
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">
						<img src="img/superL.INKlogo.png" alt="LOGO" class="superlinkimg">
					</a>
				</div>
				<!-- Top Menu Items -->
				<ul class="nav navbar-right top-nav">
					<li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
						</a>
					</li>            
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
						<ul class="dropdown-menu">
						
							<li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
							<li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
				<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li><a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Profile</a></li>
						<li>
							<a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i> Your profile</a>
							<!--<ul id="submenu-2" class="collapse">
								<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
							</ul>-->
						</li>
						<li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i>Delete account </a></li>
						
						</li>
						
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">
				<div class="container-fluid">
					<!-- Page Heading -->
					<div class="row" id="main" >
						<div class="col-sm-12 col-md-12" id="content">
							
							<h3 class="text-center">Profile</h3>

							<div class="tabbable-panel">
								<div class="tabbable-line">
									<ul class="nav nav-tabs ">
										<li class="active">
											<a href="#tab_default_1" data-toggle="tab">
											Account settings</a>
										</li>
										<li>
											<a href="#tab_default_2" data-toggle="tab">
											Links </a>
										</li>
										<li>
											<a href="#tab_default_3" data-toggle="tab">
											Followings </a>
										</li>
										<li>
											<a href="#tab_default_4" data-toggle="tab">
											Analytics </a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="tab_default_1">
											<div class="container">
												<form class="form-horizontal" method="post"
													  action="#">
													<!-- Text input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Username</label>

														<div class="col-md-4">
															<input id="name" name="username" type="text" placeholder="Username" class="form-control input-md" required="">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">First Name</label>

														<div class="col-md-4">
															<input id="name" name="firstname" type="text" placeholder="First Name" class="form-control input-md" required="">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Last Name</label>

														<div class="col-md-4">
															<input id="name" name="lastname" type="text" placeholder="Last Name" class="form-control input-md" required="">
															
														</div>
													</div>

													<!-- Select Date Of Birth-->
													
													<!-- Gender Input -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="checkboxes">Gender</label>

														<div class="col-md-4">
															<div class="checkbox">
																<label>
																	<input name="genderboxes" id="genderboxes-0" value="1" type="radio">
																	Male
																</label>															
																<label>
																	<input name="genderboxes" id="genderboxes-1" value="2" type="radio">
																	Female
																</label>
															</div>
															

														</div>
													</div>
													<!-- Email input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="password">Email</label>

														<div class="col-md-4">
															<input id="email" name="email" type="email" placeholder="Email"
																   class="form-control input-md" required="">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Country</label>

														<div class="col-md-4">
															<select name="user_country" class="form-control input-md" required="">
																<option value="GB">United Kingdom</option>

															
																<option  value="US">United States</option>

															
																<option  value="AF">Afghanistan</option>

															
																<option  value="AL">Albania</option>

															
																<option  value="DZ">Algeria</option>

															
																<option  value="AS">American Samoa</option>

															
																<option  value="AD">Andorra</option>

															
																<option  value="AO">Angola</option>

															
																<option  value="AI">Anguilla</option>

															
																<option  value="AQ">Antarctica</option>

															
																<option  value="AG">Antigua And Barbuda</option>

															
																<option  value="AR">Argentina</option>

															
																<option  value="AM">Armenia</option>

															
																<option  value="AW">Aruba</option>

															
																<option  value="AU">Australia</option>

															
																<option  value="AT">Austria</option>

															
																<option  value="AZ">Azerbaijan</option>

															
																<option  value="BS">Bahamas</option>

															
																<option  value="BH">Bahrain</option>

															
																<option  value="BD">Bangladesh</option>

															
																<option  value="BB">Barbados</option>

															
																<option  value="BY">Belarus</option>

															
																<option  value="BE">Belgium</option>

															
																<option  value="BZ">Belize</option>

															
																<option  value="BJ">Benin</option>

															
																<option  value="BM">Bermuda</option>

															
																<option  value="BT">Bhutan</option>

															
																<option  value="BO">Bolivia</option>

															
																<option  value="BA">Bosnia And Herzegowina</option>

															
																<option  value="BW">Botswana</option>

															
																<option  value="BV">Bouvet Island</option>

															
																<option  value="BR">Brazil</option>

															
																<option  value="IO">British Indian Ocean Territory</option>

															
																<option  value="BN">Brunei Darussalam</option>

															
																<option  value="BG">Bulgaria</option>

															
																<option  value="BF">Burkina Faso</option>

															
																<option  value="BI">Burundi</option>

															
																<option  value="KH">Cambodia</option>

															
																<option  value="CM">Cameroon</option>

															
																<option  value="CA">Canada</option>

															
																<option  value="CV">Cape Verde</option>

															
																<option  value="KY">Cayman Islands</option>

															
																<option  value="CF">Central African Republic</option>

															
																<option  value="TD">Chad</option>

															
																<option  value="CL">Chile</option>

															
																<option  value="CN">China</option>

															
																<option  value="CX">Christmas Island</option>

															
																<option  value="CC">Cocos (Keeling) Islands</option>

															
																<option  value="CO">Colombia</option>

															
																<option  value="KM">Comoros</option>

															
																<option  value="CG">Congo</option>

															
																<option  value="CD">Congo, The Democratic Republic Of The</option>

															
																<option  value="CK">Cook Islands</option>

															
																<option  value="CR">Costa Rica</option>

															
																<option  value="CI">Cote D'Ivoire</option>

															
																<option  value="HR">Croatia (Local Name: Hrvatska)</option>

															
																<option  value="CU">Cuba</option>

															
																<option  value="CY">Cyprus</option>

															
																<option  value="CZ">Czech Republic</option>

															
																<option  value="DK">Denmark</option>

															
																<option  value="DJ">Djibouti</option>

															
																<option  value="DM">Dominica</option>

															
																<option  value="DO">Dominican Republic</option>

															
																<option  value="TP">East Timor</option>

															
																<option  value="EC">Ecuador</option>

															
																<option  value="EG">Egypt</option>

															
																<option  value="SV">El Salvador</option>

															
																<option  value="GQ">Equatorial Guinea</option>

															
																<option  value="ER">Eritrea</option>

															
																<option  value="EE">Estonia</option>

															
																<option  value="ET">Ethiopia</option>

															
																<option  value="FK">Falkland Islands (Malvinas)</option>

															
																<option  value="FO">Faroe Islands</option>

															
																<option  value="FJ">Fiji</option>

															
																<option  value="FI">Finland</option>

															
																<option  value="FR">France</option>

															
																<option  value="FX">France, Metropolitan</option>

															
																<option  value="GF">French Guiana</option>

															
																<option  value="PF">French Polynesia</option>

															
																<option  value="TF">French Southern Territories</option>

															
																<option  value="GA">Gabon</option>

															
																<option  value="GM">Gambia</option>

															
																<option  value="GE">Georgia</option>

															
																<option  value="DE">Germany</option>

															
																<option  value="GH">Ghana</option>

															
																<option  value="GI">Gibraltar</option>

															
																<option  value="GR">Greece</option>

															
																<option  value="GL">Greenland</option>

															
																<option  value="GD">Grenada</option>

															
																<option  value="GP">Guadeloupe</option>

															
																<option  value="GU">Guam</option>

															
																<option  value="GT">Guatemala</option>

															
																<option  value="GN">Guinea</option>

															
																<option  value="GW">Guinea-Bissau</option>

															
																<option  value="GY">Guyana</option>

															
																<option  value="HT">Haiti</option>

															
																<option  value="HM">Heard And Mc Donald Islands</option>

															
																<option  value="VA">Holy See (Vatican City State)</option>

															
																<option  value="HN">Honduras</option>

															
																<option  value="HK">Hong Kong</option>

															
																<option  value="HU">Hungary</option>

															
																<option  value="IS">Iceland</option>

															
																<option  value="IN">India</option>

															
																<option  value="ID">Indonesia</option>

															
																<option  value="IR">Iran (Islamic Republic Of)</option>

															
																<option  value="IQ">Iraq</option>

															
																<option  value="IE">Ireland</option>

															
																<option  value="IL">Israel</option>

															
																<option  value="IT">Italy</option>

															
																<option  value="JM">Jamaica</option>

															
																<option  value="JP">Japan</option>

															
																<option  value="JO">Jordan</option>

															
																<option  value="KZ">Kazakhstan</option>

															
																<option  value="KE">Kenya</option>

															
																<option  value="KI">Kiribati</option>

															
																<option  value="KP">Korea, Democratic People's Republic Of</option>

															
																<option  value="KR">Korea, Republic Of</option>

															
																<option  value="KW">Kuwait</option>

															
																<option  value="KG">Kyrgyzstan</option>

															
																<option  value="LA">Lao People's Democratic Republic</option>

															
																<option  value="LV">Latvia</option>

															
																<option  value="LB">Lebanon</option>

															
																<option  value="LS">Lesotho</option>

															
																<option  value="LR">Liberia</option>

															
																<option  value="LY">Libyan Arab Jamahiriya</option>

															
																<option  value="LI">Liechtenstein</option>

															
																<option  value="LT">Lithuania</option>

															
																<option  value="LU">Luxembourg</option>

															
																<option  value="MO">Macau</option>

															
																<option  value="MK">Macedonia, Former Yugoslav Republic Of</option>

															
																<option  value="MG">Madagascar</option>

															
																<option  value="MW">Malawi</option>

															
																<option  value="MY">Malaysia</option>

															
																<option  value="MV">Maldives</option>

															
																<option  value="ML">Mali</option>

															
																<option  value="MT">Malta</option>

															
																<option  value="MH">Marshall Islands</option>

															
																<option  value="MQ">Martinique</option>

															
																<option  value="MR">Mauritania</option>

															
																<option  value="MU">Mauritius</option>

															
																<option  value="YT">Mayotte</option>

															
																<option  value="MX">Mexico</option>

															
																<option  value="FM">Micronesia, Federated States Of</option>

															
																<option  value="MD">Moldova, Republic Of</option>

															
																<option  value="MC">Monaco</option>

															
																<option  value="MN">Mongolia</option>

															
																<option  value="MS">Montserrat</option>

															
																<option  value="MA">Morocco</option>

															
																<option  value="MZ">Mozambique</option>

															
																<option  value="MM">Myanmar</option>

															
																<option  value="NA">Namibia</option>

															
																<option  value="NR">Nauru</option>

															
																<option  value="NP">Nepal</option>

															
																<option  value="NL">Netherlands</option>

															
																<option  value="AN">Netherlands Antilles</option>

															
																<option  value="NC">New Caledonia</option>

															
																<option  value="NZ">New Zealand</option>

															
																<option  value="NI">Nicaragua</option>

															
																<option  value="NE">Niger</option>

															
																<option  value="NG">Nigeria</option>

															
																<option  value="NU">Niue</option>

															
																<option  value="NF">Norfolk Island</option>

															
																<option  value="MP">Northern Mariana Islands</option>

															
																<option  value="NO">Norway</option>

															
																<option  value="OM">Oman</option>

															
																<option  value="PK">Pakistan</option>

															
																<option  value="PW">Palau</option>

															
																<option  value="PA">Panama</option>

															
																<option  value="PG">Papua New Guinea</option>

															
																<option  value="PY">Paraguay</option>

															
																<option  value="PE">Peru</option>

															
																<option  value="PH">Philippines</option>

															
																<option  value="PN">Pitcairn</option>

															
																<option  value="PL">Poland</option>

															
																<option  value="PT">Portugal</option>

															
																<option  value="PR">Puerto Rico</option>

															
																<option  value="QA">Qatar</option>

															
																<option  value="RE">Reunion</option>

															
																<option  value="RO">Romania</option>

															
																<option  value="RU">Russian Federation</option>

															
																<option  value="RW">Rwanda</option>

															
																<option  value="KN">Saint Kitts And Nevis</option>

															
																<option  value="LC">Saint Lucia</option>

															
																<option  value="VC">Saint Vincent And The Grenadines</option>

															
																<option  value="WS">Samoa</option>

															
																<option  value="SM">San Marino</option>

															
																<option  value="ST">Sao Tome And Principe</option>

															
																<option  value="SA">Saudi Arabia</option>

															
																<option  value="SN">Senegal</option>

															
																<option  value="SC">Seychelles</option>

															
																<option  value="SL">Sierra Leone</option>

															
																<option  value="SG">Singapore</option>

															
																<option  value="SK">Slovakia (Slovak Republic)</option>

															
																<option  value="SI">Slovenia</option>

															
																<option  value="SB">Solomon Islands</option>

															
																<option  value="SO">Somalia</option>

															
																<option  value="ZA">South Africa</option>

															
																<option  value="GS">South Georgia, South Sandwich Islands</option>

															
																<option  value="ES">Spain</option>

															
																<option  value="LK">Sri Lanka</option>

															
																<option  value="SH">St. Helena</option>

															
																<option  value="PM">St. Pierre And Miquelon</option>

															
																<option  value="SD">Sudan</option>

															
																<option  value="SR">Suriname</option>

															
																<option  value="SJ">Svalbard And Jan Mayen Islands</option>

															
																<option  value="SZ">Swaziland</option>

															
																<option  value="SE">Sweden</option>

															
																<option  value="CH">Switzerland</option>

															
																<option  value="SY">Syrian Arab Republic</option>

															
																<option  value="TW">Taiwan</option>

															
																<option  value="TJ">Tajikistan</option>

															
																<option  value="TZ">Tanzania, United Republic Of</option>

															
																<option  value="TH">Thailand</option>

															
																<option  value="TG">Togo</option>

															
																<option  value="TK">Tokelau</option>

															
																<option  value="TO">Tonga</option>

															
																<option  value="TT">Trinidad And Tobago</option>

															
																<option  value="TN">Tunisia</option>

															
																<option  value="TR">Turkey</option>

															
																<option  value="TM">Turkmenistan</option>

															
																<option  value="TC">Turks And Caicos Islands</option>

															
																<option  value="TV">Tuvalu</option>

															
																<option  value="UG">Uganda</option>

															
																<option  value="UA">Ukraine</option>

															
																<option  value="AE">United Arab Emirates</option>

															
																<option  value="UM">United States Minor Outlying Islands</option>

															
																<option  value="UY">Uruguay</option>

															
																<option  value="UZ">Uzbekistan</option>

															
																<option  value="VU">Vanuatu</option>

															
																<option  value="VE">Venezuela</option>

															
																<option  value="VN">Viet Nam</option>

															
																<option  value="VG">Virgin Islands (British)</option>

															
																<option  value="VI">Virgin Islands (U.S.)</option>

															
																<option  value="WF">Wallis And Futuna Islands</option>

															
																<option  value="EH">Western Sahara</option>

															
																<option  value="YE">Yemen</option>

															
																<option  value="YU">Yugoslavia</option>

															
																<option  value="ZM">Zambia</option>

															
																<option  value="ZW">Zimbabwe</option>

								
															</select>
															
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">State</label>

														<div class="col-md-4">
															<input id="paddress" name="state" type="text" placeholder="State" class="form-control input-md"
																   required="">
															
														</div>
													</div>
													<!-- Taddress input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">City</label>

														<div class="col-md-4">
															<input id="taddress" name="city" type="text" placeholder="City" class="form-control input-md"
																   required="">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Bio</label>

														<div class="col-md-4">
														<textarea name="" id="" minlength="1" maxlength="150" class="form-control input-md"></textarea><br />
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Featured link</label>

														<div class="col-md-4">
															<input id="" name="" type="text" placeholder="Video link" class="form-control input-md"
																   required="">
															
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label" for="name">Profile image</label>

														<div class="col-md-4">
														<img class="change_profile_image_instanly" src="img/avatar.png" style="height:100px; width:auto; border-radius: 10px;">
															<input id="" name="" type="submit" value="Profile image" class="form-control input-md pro_img" required="">
															
														</div>
													</div>
													
													
												</form>
											</div>



										</div>
										<div class="tab-pane" id="tab_default_2">
											<div class="back-color">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
														<h4 class="font-wieght">Here you can add your link</h4>
														<p class="font-wieght">Your link: <a href="http://www.google.com">www.google.com</a></p>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
														<input type="submit" value="Add link" class="btn btn-primary float">
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_default_3">
											sdf
											
										</div>
										<div class="tab-pane" id="tab_default_4">
											fdfdf
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
		</div><!-- /#wrapper -->
		



	  
	</body>
</html>
