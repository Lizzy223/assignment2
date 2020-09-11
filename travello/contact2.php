<?php include "includes/header2.php" ?>

<div class="super_container">
	
	<!-- Header -->
    <?php include "includes/navigation2.php" ?>
	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="login2.php">Home</a></li>
				<li><a href="about2.php">About us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="new2.php">News</a></li>
				<li><a href="contact2.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
	</div>

	<!-- Search -->

	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_title">Search for your trip</div>
						<div class="home_search_content">
						<form action="search2.php" method="post" class="home_search_form" id="home_search_form">
                                    <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <div class="form-group dropdown">                            
                                            <select class="form-control search_input mt-2 p-2" name="city" id="exampleFormControlSelect1">
                                            <?php
                                                $connect = mysqli_connect('localhost', 'root', '', 'travelo');
                                                $query = "SELECT * FROM place";
                                                $select_place_query = mysqli_query($connect, $query);
                                                while ($loop = mysqli_fetch_assoc($select_place_query)) {
                                                    # code...
                                                    $city_name = $loop['city_name'];
                                                  ?>
                                                  <option>                                                  
                                                   <?php echo $city_name;
                                                }?>                                            
                                                </option>
                                                                                        
                                            </select>
                                        </div>    
                                        
                                        <input type="text" class="search_input search_input_2" placeholder="Departure" required="required">
                                        <input type="text" class="search_input search_input_3" placeholder="Arrival" required="required">
                                        <div class="form-group dropdown">                            
                                            <select class="form-control search_input mt-2 p-2" name="price" id="exampleFormControlSelect1">
                                            <?php
                                                $connect = mysqli_connect('localhost', 'root', '', 'travelo');
                                                $query = "SELECT * FROM place";
                                                $select_price_query = mysqli_query($connect, $query);
                                                while ($loop = mysqli_fetch_assoc($select_price_query)) {
                                                    # code...
                                                    $city_price = $loop['city_price'];
                                                  ?>
                                                  <option>                                                  
                                                   <?php echo $city_price;
                                                }?>                                            
                                                </option>
                                                                                        
                                            </select>
                                        </div>   
                                        <button name="submit" type="submit" class="home_search_button">search</button>
                                    </div>
                                </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title">Get in touch with us</div>
						<div class="contact_text">
							<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li>
									<div>address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li>
									<div>phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>email:</div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6 mt-5">
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt" placeholder="Your Name" required="required"><div class="input_border"></div></div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your E-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Subject" required="required"><div class="input_border"></div></div>
								</div>
							</div>
							<div><textarea class="contact_textarea contact_input inpt" placeholder="Message" required="required"></textarea><div class="input_border" style="bottom:3px"></div></div>
							<button class="btn btn-outline-primary contact_button">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include "includes/footer2.php" ?>