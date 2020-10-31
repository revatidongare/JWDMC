<!DOCTYPE html>
<html lang="en-US">
<?php include'includes/head.php';?>
<body class="transparent_home_page">
<div class="wrapper-container">
	<?php include'includes/navbar.php';?>
	<div class="site wrapper-content">
		<div class="home-content" role="main">
			<div class="wrapper-bg-video">
				<video poster="images/video_slider.jpg" playsinline autoplay muted loop>
					<source src="videos/330149744.mp4" type="video/mp4">
				</video>
				<div class="content-slider"style="color: #2C3335">
					<h1>LOVE THE PLACES </h1>
					<h2 style="color: #2C3335">NEVER STOP EXPLORING </h2>
					
				</div>
			</div>

			<div class="slider-tour-booking">
				<div class="container">
					<div class="travel-booking-search hotel-booking-search travel-booking-style_1">
						<form name="hb-search-form" action="tours.html" id="tourBookingForm">
							<ul class="hb-form-table">
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="name_tour" value="" placeholder="Tour name">
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourtax[tour_phys]">
											<option value="0">Tour Type</option>
											<option value="escorted-tour">Escorted Tour</option>
											<option value="rail-tour">Rail Tour</option>
											<option value="river-cruise">River Cruise</option>
											<option value="tour-cruise">Tour &amp; Cruise</option>
											<option value="wildlife">Wildlife</option>
										</select>
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourtax[pa_destination]">
											<option value="0">Destination</option>
											<option value="china">Brazil</option>
											<option value="canada">Canada</option>
											<option value="cuba">Cuba</option>
											<option value="italy">Italy</option>
											<option value="philippines">Philippines</option>
											<option value="usa">USA</option>
										</select></div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<select name="tourtax[pa_month]">
											<option value="0">Month</option>
											<option value="january">January</option>
											<option value="february">February</option>
											<option value="march">March</option>
											<option value="april">April</option>
											<option value="may">May</option>
											<option value="june">June</option>
											<option value="july">July</option>
											<option value="august">August</option>
											<option value="september">September</option>
											<option value="october">October</option>
											<option value="november">November</option>
											<option value="december">December</option>
										</select></div>
								</li>
								<li class="hb-submit">
									<button type="submit">Search Tours</button>
								</li>
							</ul>
							<input type="hidden" name="lang" value="">

						</form>
					</div>
				</div>
			</div>
			<div class="container two-column-respon mg-top-6x mg-bt-6x">
				<div class="row">
					<div class="col-sm-12 mg-btn-6x">
						<div class="shortcode_title title-center title-decoration-bottom-center">
							<h3 class="title_primary">WHY CHOOSE US?</h3><span class="line_after_title"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-transport-6"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Diverse Destinations</h4></div>
								<div class="desc-icon-box">
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-sand"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Value for Money</h4></div>
								<div class="desc-icon-box">
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon " style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-travel-2"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Beautiful Places</h4></div>
								<div class="desc-icon-box">
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column col-sm-3">
						<div class="widget-icon-box widget-icon-box-base iconbox-center">
							<div class="boxes-icon circle" style="font-size:30px;width:80px; height:80px;line-height:80px">
								<span class="inner-icon"><i class="vc_icon_element-icon flaticon-travelling"></i></span>
							</div>
							<div class="content-inner">
								<div class="sc-heading article_heading">
									<h4 class="heading__primary">Passionate Travel</h4></div>
								<div class="desc-icon-box">
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-popular.jpg)">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div class="title_subtitle">Take a Look at Our</div>
						<h3 class="title_primary">MOST POPULAR TOURS</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
												
											<span class="price"><del>
												<span class="travel_tour-Price-amount amount">$87.00</span></del>
												<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
											</span>
												<span class="onsale">Sale!</span>
												<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$82.00</span>
											</span>
												<img src="images//tour/430x305/tour-2.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Camping Americas West</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
												<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
												<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$94.00</span>
											</span>
												<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$91.00</span>
											</span>
												<img src="images/tour/430x305/tour-6.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Cuzco to Anchorage</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-white padding-top-6x padding-bottom-6x tours-type">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<div class="title_subtitle">Find a Tour by</div>
						<h3 class="title_primary">DESTINATION</h3><span class="line_after_title"></span>
					</div>
					<div class="wrapper-tours-slider wrapper-tours-type-slider">
						<div class="tours-type-slider" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":4}, "1200":{"items":5}}'>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/26003147786_a04226cd2f_o.jpg" alt="Brazil">
								</a>
								<div class="content-item">
									<div class="item__title">Brazil</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/24987002020_29d3944b4f_o.jpg" alt="Philippines">
								</a>
								<div class="content-item">
									<div class="item__title">Philippines</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/25816508131_00e16429b8_o.jpg" alt="Italy">
								</a>
								<div class="content-item">
									<div class="item__title">Italy</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/photo-1474181487882-5abf3f0ba6c2.jpg" alt="USA">
								</a>
								<div class="content-item">
									<div class="item__title">USA</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/25656857141_edcdf5e6e3_o.jpg" alt="Canada">
								</a>
								<div class="content-item">
									<div class="item__title">Canada</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/26003147786_a04226cd2f_o.jpg" alt="Cuba">
								</a>
								<div class="content-item">
									<div class="item__title">Cuba</div>
								</div>
							</div>
							<div class="tours_type_item">
								<a href="tours.html" class="tours-type__item__image">
									<img src="images/city/25656857141_edcdf5e6e3_o.jpg" alt="Brazil">
								</a>
								<div class="content-item">
									<div class="item__title">Brazil</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="padding-top-6x padding-bottom-6x bg__shadow section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
				<div class="container">
					<div class="shortcode_title text-white title-center title-decoration-bottom-center">
						<div class="title_subtitle">Some statistics about Travel WP</div>
						<h3 class="title_primary">CENTER ACHIEVEMENTS</h3>
						<span class="line_after_title" style="color:#ffffff"></span>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="fa fa-plane"></i>
								</div>
								<div class="stats_counter_number">94,532</div>
								<div class="stats_counter_title">Customers</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="fa fa-tree"></i>
								</div>
								<div class="stats_counter_number">1021</div>
								<div class="stats_counter_title">Destinations</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="fa fa-globe"></i>
								</div>
								<div class="stats_counter_number">20,096</div>
								<div class="stats_counter_title">Tours</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="stats_counter text-center text-white">
								<div class="wrapper-icon">
									<i class="fa fa-bus"></i>
								</div>
								<div class="stats_counter_number">12</div>
								<div class="stats_counter_title">Tour types</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center padding-top-6x">
							<a href="https://themeforest.net/item/travel-html-tour-travel-html-template-for-travel-agency-and-tour-operator/19504894" class="icon-btn" title="Tour HTML Template - Travel HTML Template" target="_blank">
								<i class="flaticon-cart"></i> Purchase theme
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-white padding-top-6x padding-bottom-6x">
				<div class="container">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<h3 class="title_primary">DEALS AND DISCOUNTS</h3><span class="line_after_title"></span>
					</div>
					<div class="row wrapper-tours-slider">
						<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":3}, "1200":{"items":3}}'>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$89.00</span>
											</span>
												<img src="images/tour/430x305/tour-3.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Anchorage to Santiago</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">90.00</span>
 											</span>
												<img src="images/tour/430x305/tour-4.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Anchorage to Ushuaia</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price">
												<span class="travel_tour-Price-amount amount">$94.00</span>
											</span>
												<img src="images/tour/430x305/tour-5.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Discover Brazil</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
							<div class="item-tour">
								<div class="item_border">
									<div class="item_content">
										<div class="post_images">
											<a href="single-tour.html" class="travel_tour-LoopProduct-link">
											<span class="price"><del>
												<span class="travel_tour-Price-amount amount">$87.00</span></del>
												<ins><span class="travel_tour-Price-amount amount">$82.00</span></ins>
											</span>
												<span class="onsale">Sale!</span>
												<img src="images/tour/430x305/tour-1.jpg" alt="" title="">
											</a>
											<div class="group-icon">
												<a href="#" data-toggle="tooltip" data-placement="top" title="" class="frist" data-original-title="River Cruise"><i class="flaticon-transport-2"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wildlife"><i class="flaticon-island"></i></a>
											</div>
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="single-tour.html" rel="bookmark">Kiwiana Panorama</a>
											</h4></div>
											<span class="post_date">5 DAYS 4 NIGHTS</span>
											<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</div>
										<a href="single-tour.html" class="read_more_button">VIEW MORE
											<i class="fa fa-long-arrow-right"></i></a>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bg__shadow padding-top-6x padding-bottom-6x section-background" style="background-image:url(images/home/bg-pallarax.jpg)">
				<div class="container">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div class="discounts-tour">
								<h3 style="color:#ffffff" class="discounts-title"> Special Tour in April, Discover Australia for 100 customers with
									<span> discount 50%</span></h3>
								<span class="line" style="color:#ffffff"></span>
								<p style="color:#ffffff">It’s limited seating! Hurry up</p>
								<div class="row centered text-center" id="myCounter"></div>
								<div class="col-sm-12 text-center padding-top-2x">
									<a href="#" class="icon-btn"><i class="flaticon-airplane-4"></i> Get tour </a>
								</div>
							</div>
						</div>
						<div class="col-sm-2"></div>
					</div>
				</div>
			</div>

			<div class="section-white padding-top-6x padding-bottom-6x">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="shortcode_title title-center title-decoration-bottom-center">
								<h2 class="title_primary">Tours Reviews</h2>
								<span class="line_after_title"></span>
							</div>
							<div class="shortcode-tour-reviews wrapper-tours-slider">
								<div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Jessica</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Canadian Rockies</a>
											</h3>
											<div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time</div>
										</div>
									</div>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Jessica</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Canadian Rockies</a>
											</h3>
											<div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time</div>
										</div>
									</div>
									<div class="tour-reviews-item">
										<div class="reviews-item-info">
											<img alt="" src="images/avata.jpeg" class="avatar avatar-95 photo" height="90" width="90">
											<div class="reviews-item-info-name">Jessica</div>
											<div class="reviews-item-rating">
												<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
											</div>
										</div>
										<div class="reviews-item-content">
											<h3 class="reviews-item-title">
												<a href="#">Canadian Rockies</a>
											</h3>
											<div class="reviews-item-description">The sightseeing and activities were better than we even thought! I still can’t believe we did so much in such a short time.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="shortcode_title title-center title-decoration-bottom-center">
								<h2 class="title_primary">Latest Post</h2>
								<span class="line_after_title"></span>
							</div>
							<div class="row">
								<div class="post_list_content_unit col-sm-6">
									<div class="feature-image">
										<a href="#" class="entry-thumbnail">
											<img width="370" height="260" src="images/blog/201H.jpg" alt="">
										</a>
									</div>
									<div class="post-list-content">
										<div class="post_list_inner_content_unit">
											<h3 class="post_list_title">
												<a href="single.html" rel="bookmark">Love advice from experts</a>
											</h3>
											<div class="wrapper-meta">
												<div class="date-time">September 6, 2016</div>
												<div class="post_list_cats">
													<a href="#" rel="category tag">Technology</a>
												</div>
											</div>
											<div class="post_list_item_excerpt">A:Shop No. C , Commercial House,Jupiter CHS Near Ganesh Temple,Kalyani Nagar 
											</div>
										</div>
									</div>
								</div>
								<div class="post_list_content_unit col-sm-6">
									<div class="feature-image">
										<a href="#" class="entry-thumbnail">
											<img width="370" height="260" src="images/blog/86H.jpg" alt="">
										</a>
									</div>
									<div class="post-list-content">
										<div class="post_list_inner_content_unit">
											<h3 class="post_list_title">
												<a href="single.html" rel="bookmark">The perfect summer body</a>
											</h3>
											<div class="wrapper-meta">
												<div class="date-time">September 6, 2016</div>
												<div class="post_list_cats">
													<a href="#" rel="category tag">Technology</a>
												</div>
											</div>
											<div class="post_list_item_excerpt">A:Shop No. C , Commercial House,Jupiter CHS Near Ganesh Temple,Kalyani Nagar</div>
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
	<div class="wrapper-footer wrapper-footer-newsletter">
		<div class="main-top-footer">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">CONTACT</h3>
						<div class="textwidget">
							<div class="footer-info">
								<p>A:Shop No. C , Commercial House,Jupiter CHS Near Ganesh Temple,Kalyani Nagar</p>
								<ul class="contact-info">
									<li><i class="fa fa-map-marker fa-fw"></i> Pune, India 411014</li>
									<li><i class="fa fa-phone fa-fw"></i># +91 20-48601029</li>
									<li>
										<i class="fa fa-envelope fa-fw"></i><a href="mailto:hello@siteinfo.com"> paresh@travelogholiday.com</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">INFORMATION</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">Press Centre</a></li>
								<li><a href="#">Travel News</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 widget_text"><h3 class="widget-title">Our Menu</h3>
						<div class="textwidget">
							<ul class="menu list-arrow">
								<li><a href="#">About us</a></li>
								<li><a href="#">Career</a></li>
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</aside>
					<aside class="col-sm-3 custom-instagram widget_text">
						<h3 class="widget-title">Instagram</h3>
						<div class="textwidget">
							<ul>
								<li><img src="images/instagram/1.jpg" alt="instagram"></li>
								<li><img src="images/instagram/2.jpg" alt="instagram"></li>
								<li><img src="images/instagram/3.jpg" alt="instagram"></li>
								<li><img src="images/instagram/4.jpg" alt="instagram"></li>
								<li><img src="images/instagram/5.jpg" alt="instagram"></li>
								<li><img src="images/instagram/6.jpg" alt="instagram"></li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="container wrapper-copyright">
			<div class="row">
				<div class="col-sm-6">
					<div><p>Copyright © 2017 Travel. All Rights Reserved.</p></div>
				</div>
				<div class="col-sm-6">
					<aside id="text-5" class="widget_text">
						<div class="textwidget">
							<ul class="footer_menu">
								<li><a href="#">Terms of Use</a></li>
								<li>|</li>
								<li><a href="#">Privacy Policy</a></li>
								<li>|</li>
								<li><a href="https://twitter.com/physcode"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/physcode/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/physcode/"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-subscribe" style="background-image: url(images/home/bg_newletter.jpg)">
		<div class="subscribe_shadow"></div>
		<div class="form-subscribe parallax-section stick-to-bottom form-subscribe-full-width">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center margin-bottom-3x">
				<div class="title_subtitle">To receive our best monthly deals</div>
				<h3 class="title_primary">JOIN THE NEWSLETTER</h3>
				<span class="line_after_title"></span>
			</div>
			<div class="form-subscribe-form-wrap">
				<aside class="mailchimp-container">
					<form class="epm-sign-up-form" name="epm-sign-up-form" action="#" method="post">
						<div class="epm-form-field">
							<label for="epm-email">Email Address</label>
							<input type="email" placeholder="Email Address" name="epm-email" tabindex="8" class="email" id="epm-email" value="">
						</div>


						<input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
					</form>
				</aside>
			</div>
		</div>
	</div>
</div>
<script type='text/javascript' src="assets/js/jquery.min.js"></script>
<script type='text/javascript' src="assets/js/bootstrap.min.js"></script>
<script type='text/javascript' src="assets/js/vendors.js"></script>
<script type='text/javascript' src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mb-comingsoon.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/theme.js"></script>

</body>
</html>