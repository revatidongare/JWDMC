<?php include 'session.php'; ?>
<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<!-- <li><i class="fa fa-clock-o"></i>Mon-Sat 8.00 - 7.00. [Sunday CLOSED]</li> -->
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-8 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i> +91 20-48601029</li>
									<li class="hidden-info">
										<i class="fa fa-map-marker"></i> Kalyani Nagar,Pune,India
									</li>
								</ul>
							</div>
						</aside>
						<aside id="travel_login_register_from-2" class="widget widget_login_form">
							<?php                 
                 if(isset($_SESSION['id'])){ ?>
						<span  class="show_from login"><a href="logout.php"><i class="fa fa-user"></i>Logout</a></span>
						<?php }
				else{?>
						<span data-toggle="modal" data-target="#loginmodal"class="show_from login"><i class="fa fa-user"></i>Login</span>
					
						<span data-toggle="modal" data-target="#registermodal" class="register_btn">Register</span>

							<?php }?>
							<div class="background-overlay"></div>
						</aside>
					</div>
					
				</div>
			</div>
		</div>
		<div class="navigation-menu" style="background-color: #fff;">
				<div class="container" style="padding: 0;">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="" title="Travel" rel="home">
						<img src="images/logo.png" alt="Logo" width="474" height="130" class="logo_transparent_static">
						<img src="images/logo.png" alt="Sticky logo" width="474" height="100" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation"style="max-width: 100%;margin: 0;padding: 0">
					<?php                 
                 if(isset($_SESSION['id'])){ ?>
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">

						<li class="current-menu-ancestor current-menu-parent">
							<a style="color:#192A56"href="index.php">Home</a>
						</li>
						<li><a style="color:#192A56" href="about.php">About us</a></li>
						<li><a style="color:#192A56 "href="index.php">Holidays</a>
								<ul class="sub-menu">
									<li><a href="index.php">Domestic</a>
									<ul class="sub-menu">
									<li><a href="index.php">North East</a>
									<ul class="sub-menu">
									<li><a href="Arunachal.php">Arunachal Pradesh</a></li>
									<li><a href="Nagaland.php">Nagaland</a></li>
									<li><a href="tours.html">Mizoram</a></li>
									<li><a href="tours-3-cols.html">Manipur</a></li>
									<li><a href="Tripura.php">Tripura</a></li>
									<li><a href="tours-4-cols.html">Assam</a></li>
										</ul>
									</li>
								</ul>
									<li><a href="#">International</a>
										<ul class="sub-menu" style="overflow-y: scroll; height: 200px">

									<li><a href="Australia.php">Australia</a></li>
									<li><a href="tours-list.html">Unseen Thailand</a></li>
									<li><a href="Thailand.php">Thailand</a></li>
									<li><a href="tours.html">South Korea</a></li>
									<li><a href="tours-3-cols.html">Vietnam</a></li>
									<li><a href="tours-4-cols.html">Kambodia</a></li>
									<li><a href="tours-4-cols.html">Isreal</a></li>
									<li><a href="tours-4-cols.html">Taiwan</a></li>
									<li><a href="tours-4-cols.html">Scandinavian Countries</a></li>
									<li><a href="tours-4-cols.html">Philippines</a></li>
									<li><a href="tours-4-cols.html">French Islands Like Reunion Island</a></li>
									<li><a href="tours-4-cols.html">Madagascar</a></li>
									<li><a href="tours-4-cols.html">Zanzibar</a></li>
									<li><a href="tours-4-cols.html">Spanish Islands Like Formentera</a></li>
									<li><a href="tours-4-cols.html">Costa Brava</a></li>
									<li><a href="tours-4-cols.html"> Ibiza</a></li>
									<li><a href="tours-4-cols.html"> Gran Canaria</a></li>
									<li><a href="tours-4-cols.html"> Minorca And Some More</a></li>
										</ul>
									</li>
								</ul>
							</li>
						<li><a style="color:#192A56 "href="destinations.html">Honeymoon Special</a>
								<ul class="sub-menu">
									<li><a href="single-tour.html">Domestic</a>
										<ul class="sub-menu">
											<li><a href="feel.php">Feel The Love Of South</a></li>
											<li><a href="himachal.php">Romantic Himachal</a></li>
											<li><a href="kerala.php">Romantic Kerala</a></li>
										</ul>
									</li>
									<li><a href="#">International</a>
										<ul class="sub-menu" style="overflow-y: scroll; height: 200px">
											<li><a href="bali.php">Romantic Bali</a></li>
											<li><a href="europe.php">Romantic Europe</a></li>
											<li><a href="island.php">Romantic Koh Samui Island</a></li>
											<li><a href="kisland.php">Romantic Krabi Island</a></li>
											<li><a href="maldiv.php">Romantic Maldives</a></li>
											<li><a href="mauritius.php">Romantic Mauritius</a></li>
											<li><a href="seychelles.php">Romantic Seychelles</a></li>
											<li><a href="PhuketIsland.php">Romantic  Phuket Island</a></li>
											<li><a href="tours-4-cols.html">Romantic  Australia and new Zealand</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!-- <li><a style="color:#192A56" href="blog.html">Offers</a></li> -->
<!--  -->
							<!-- <li>
								<a style="color:#192A56 "href="blog.html">Group Departure</a>
							</li> -->
<li class="blink"><a  style="color:#1048d8" href="http://www.journeyworldcreations.com/" target="_blank">JW Creations</a></li>

							<li><a style="color:#192A56" href="contact.php">Contact</a></li>
						
						
					</ul>
				<?php }
				else{?>
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">

						<li class="current-menu-ancestor current-menu-parent">
							<a style="color:#192A56" data-toggle="modal" data-target="#loginmodal">Home</a>
						</li>
							<li><a style="color:#192A56 " data-toggle="modal" data-target="#loginmodal">About us</a></li>
				
							<li><a style="color:#192A56 "data-toggle="modal" data-target="#loginmodal">Holidays</a>
								<ul class="sub-menu">
									<li><a data-toggle="modal" data-target="#loginmodal">Domestic</a>
										<ul class="sub-menu">
											<li><a href="index.php">North East</a>
									<ul class="sub-menu">
											<li><a data-toggle="modal" data-target="#loginmodal">Arunachal Pradesh</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Nagaland</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Mizoram</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Manipur</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Tripura</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Assam </a></li>
										</ul>
									</li>
								</ul>
									<li><a href="#">International</a>
										<ul class="sub-menu" style="overflow-y: scroll; height: 200px">

											<li><a data-toggle="modal" data-target="#loginmodal">Australia</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Unseen Thailand</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Thailand</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">South Korea</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Vietnam</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Kambodia</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Isreal</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Taiwan</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Scandinavian Countries</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Philippines</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">French Islands Like Reunion Island</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Madagascar</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Zanzibar</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Spanish Islands Like Formentera</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal">Costa Brava</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal"> Ibiza</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal"> Gran Canaria</a></li>
									<li><a data-toggle="modal" data-target="#loginmodal"> Minorca And Some More</a></li>
										</ul>
									</li>
								</ul>
							</li>
						<li><a style="color:#192A56 "data-toggle="modal" data-target="#loginmodal">Honeymoon Special</a>
								<ul class="sub-menu">
									<li><a data-toggle="modal" data-target="#loginmodal">Domestic</a>
										<ul class="sub-menu">
											<li><a data-toggle="modal" data-target="#loginmodal">Feel The Love Of South</a></li>

											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Himachal</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Kerala</a></li>
										</ul>
									</li>
									<li><a data-toggle="modal" data-target="#loginmodal">International</a>
										<ul class="sub-menu" style="overflow-y: scroll; height: 200px">

											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Bali</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Europe</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Koh Samui Island</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Krabi Island</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Maldives</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Mauritius</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic Seychelles</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic  Phuket Island</a></li>
											<li><a data-toggle="modal" data-target="#loginmodal">Romantic  Australia and new Zealand</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<!--   -->
							<!-- <li>
								<a style="color:#192A56 "data-toggle="modal" data-target="#loginmodal">Group Departure</a>
							</li> -->
<li class="blink"><a  style="color:#1048d8" href="http://www.journeyworldcreations.com/" target="_blank">JW Creations</a></li>

							<li><a style="color:#192A56 " href="contact.php">Contact</a></li>


						<!-- <li class="menu-item-has-children">
							<a href="#">Pages</a>
							<ul class="sub-menu">


								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="travel-tips.html">Travel Tips</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="checkout.html">Checkout</a></li>
							</ul>
						</li> -->
						
						
					</ul>
				<?php }?>
				</nav>
			</div>
		</div>
	</header>
	<div class="modal fade  bd-example-modal-lg" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-lg">

						<div class="modal-body">
							<div class="container-fluid">
								<div class="row" align="center">
									<div class="col-lg-12 mx-auto" >
										<h2 class="text-theme mb-0">Register</h2>
										<hr class="star-dark mb-5 text-theme">
									</div>
									<div class="col-lg-6 mx-auto raised">
										<img class="img-fluid mb-5" src="images/agent.png" alt="">
										<br><br>
										<a class="btn rounded-pill" style="background-color: silver" href="AgentRegister.php" onmousedown="beep3.play()">
											<!-- <i class="fa fa-close"></i> -->
										Agent Register</a>
									</div>
									<div class="col-lg-6 mx-auto raised">
										<img class="img-fluid mb-5" src="images/corporate.png" alt="">
										<br><br>
										<a class="btn rounded-pill" style="background-color: silver" href="CorporateRegister.php" onmousedown="beep3.play()">
											<!-- <i class="fa fa-close"></i> -->
										Corporate Register</a>
									</div>

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>

			<!-- login modal -->
			<div class="modal fade  bd-example-modal-lg" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-lg">

						<div class="modal-body">
							<div class="container-fluid">
								<div class="row" align="center">
									<div class="col-lg-12 mx-auto" >
										<h2 class="text-theme mb-0">Login</h2>
										<hr class="star-dark mb-5 text-theme">
									</div>
									<div class="col-lg-6 mx-auto raised">
										<img class="img-fluid mb-5" src="images/agent.png" alt="">
										<br><br>
										<a class="btn rounded-pill" style="background-color: silver" href="AgentLogin.php" onmousedown="beep3.play()">
											<!-- <i class="fa fa-close"></i> -->
										Agent Login</a>
									</div>
									<div class="col-lg-6 mx-auto raised">
										
										<img class="img-fluid mb-5" src="images/corporate.png" alt="">
										<br><br>
										<a class="btn rounded-pill" style="background-color: silver" href="Corporatelogin.php" onmousedown="beep3.play()">
											<!-- <i class="fa fa-close"></i> -->
										Corporate Login</a>
									</div>

								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
