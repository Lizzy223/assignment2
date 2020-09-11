<?php include "includes/header.php" ?>

<body>

    <div class="super_container">

        <!-- Header -->
<?php include "includes/navigation.php" ?>
        <!-- Home -->

        <div class="home">

            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Let us take you away</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Let us take you away</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                        <div class="home_slider_content_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_content">
                                            <div class="home_title">
                                                <h2>Let us take you away</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="home_page_nav">
                    <ul class="d-flex flex-column align-items-end justify-content-end">
                        <li><a href="#" data-scroll-to="#destinations">Offers<span>01</span></a></li>
                        <li><a href="#" data-scroll-to="#testimonials">Testimonials<span>02</span></a></li>
                        <li><a href="#" data-scroll-to="#news">Latest<span>03</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search -->

        <div class="home_search">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_search_container">
                            <div class="home_search_title">Search for your trip</div>
                            <div class="home_search_content">
                            <form action="search.php" method="post" class="home_search_form" id="home_search_form">
                                    <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                        <div class="form-group dropdown">                            
                                            <select class="form-control search_input mt-2 p-2" name="city_name" id="exampleFormControlSelect1">
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
                                                  <option value=''>                                                  
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

        <!-- Intro -->

     
        <div class="intro">
            <div class="intro_background" style="background-image:url(images/intro.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_container">
                            <div class="row">

                                <!-- Intro Item -->
                                <div class="col-lg-4 intro_col">
                                    <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="intro_icon"><img src="images/beach.svg" alt=""></div>
                                        <div class="intro_content">
                                            <div class="intro_title">Top Destinations</div>
                                            <div class="intro_subtitle">
                                                <p>Nulla pretium tincidunt felis, nec.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Intro Item -->
                                <div class="col-lg-4 intro_col">
                                    <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
                                        <div class="intro_content">
                                            <div class="intro_title">The Best Prices</div>
                                            <div class="intro_subtitle">
                                                <p>Sollicitudin mauris lobortis in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Intro Item -->
                                <div class="col-lg-4 intro_col">
                                    <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                        <div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
                                        <div class="intro_content">
                                            <div class="intro_title">Amazing Services</div>
                                            <div class="intro_subtitle">
                                                <p>Nulla pretium tincidunt felis, nec.</p>
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

        <!-- Destinations -->

        <div class="destinations" id="destinations">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_subtitle">simply amazing places</div>
                        <div class="section_title">
                            <h2>Popular Destinations</h2>
                        </div>
                    </div>
                </div>
                <div class="row destinations_row">
                    <div class="col">
                        <div class="destinations_container item_grid">

                            <!-- Destination -->
                            <!-- <div class="destination item">
                                <div class="destination_image">
                                    <img src="images/destination_1.jpg" alt="">
                                    <div class="spec_offer text-center"><a href="#">Special Offer</a></div>
                                </div>
                                <div class="destination_content">
                                    <div class="destination_title"><a href="destinations.html">Bali</a></div>
                                    <div class="destination_subtitle">
                                        <p>Nulla pretium tincidunt felis, nec.</p>
                                    </div>
                                        <div class="destination_price">From $679</div>
                                </div>
                            </div> -->

                            <!-- search -->
                            <?php

if(isset($_POST['submit'])){
    $city  = $_POST['city_name'];
    $price = $_POST['price'];

    $connect = mysqli_connect('localhost', 'root', '', 'travelo');
    $query = "SELECT * FROM place WHERE city_name LIKE '%$city%' AND city_price LIKE '%$price%' ";
    $search_query = mysqli_query($connect, $query);
    if(!$search_query){
        die("QUERY FAILED" . mysqli_error($connect));
    }
    $count = mysqli_num_rows($search_query);
    if($count === 0){
        echo "<h1 class='text-center'>NO RESULT</h1>";
    }else {
        # code...
        while($row = mysqli_fetch_assoc($search_query)) {
            # code...
            $id = $row['id'];
            $image = $row['image'];
            $city_name = $row['city_name'];
            $content = $row['content'];
            $city_price = $row['city_price'];
           
           
           ?> 
            <?php
                                // $connect = mysqli_connect('localhost', 'root', '', 'travelo');
                                //  $query = "SELECT * FROM place";
                                 $select_category = mysqli_query($connect, $query);

                                 while($row = mysqli_fetch_assoc($select_category)) {
                                     # code...
                                     $id = $row['id'];
                                     $image = $row['image'];
                                     $city_name = $row['city_name'];
                                     $content = $row['content'];
                                     $city_price = $row['city_price'];
                                     $status = $row['status'];
                                    
                                    ?>
                                    
                        <?php
                            echo'<div class="destination item">';
                            echo '  <div class="destination_image">';
                                   echo "<img src='images/$image' alt=''>";
                                   echo'</div>';
                                   echo'<div class="destination_content">';                                   
                                echo "<div class='destination_title'><a href='destinations.html'> $city_name</a></div>";
                                echo ' <div class="destination_subtitle">';
                                    echo"<p> $content</p>";
                                    echo ' </div>';
                                    echo "<div class='destination_price'>From $city_price</div>";
                                    echo' </div>';
                                    echo'</div>';
                        ?>
                            <?php     }
                            ?>     
          
 <?php       }
    }

}

?>

                            <!-- Destination -->                            
                           


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->

        <div class="testimonials" id="testimonials">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_subtitle">simply amazing places</div>
                        <div class="section_title">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row testimonials_row">
                    <div class="col">

                        <!-- Testimonials Slider -->
                        <div class="testimonials_slider_container">
                            <div class="owl-carousel owl-theme testimonials_slider">

                                <!-- Slide -->
                                <div class="owl-item text-center">
                                    <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                    <div class="testimonial_author">
                                        <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                            <div>john turner,</div>
                                            <div>client</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item text-center">
                                    <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                    <div class="testimonial_author">
                                        <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                            <div>john turner,</div>
                                            <div>client</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Slide -->
                                <div class="owl-item text-center">
                                    <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lobortis dolor. Cras placerat lectus a posuere aliquet. Curabitur quis vehicula odio.</div>
                                    <div class="testimonial_author">
                                        <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                            <div>john turner,</div>
                                            <div>client</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="test_nav">
                <ul class="d-flex flex-column align-items-end justify-content-end">
                    <li><a href="#">City Breaks Clients<span>01</span></a></li>
                    <li><a href="#">Cruises Clients<span>02</span></a></li>
                    <li><a href="#">All Inclusive Clients<span>03</span></a></li>
                </ul>
            </div>
        </div>

        <!-- News -->

        <div class="news" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="news_container">

                            <!-- News Post -->
                            <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                                <div class="news_post_content">
                                    <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                        <div>02</div>
                                        <div>june</div>
                                    </div>
                                    <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                    <div class="news_post_category">
                                        <ul>
                                            <li><a href="#">lifestyle & travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news_post_text">
                                        <p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- News Post -->
                            <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
                                <div class="news_post_content">
                                    <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                        <div>01</div>
                                        <div>june</div>
                                    </div>
                                    <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                    <div class="news_post_category">
                                        <ul>
                                            <li><a href="#">lifestyle & travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news_post_text">
                                        <p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- News Post -->
                            <div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
                                <div class="news_post_content">
                                    <div class="news_post_date d-flex flex-row align-items-end justify-content-start">
                                        <div>29</div>
                                        <div>may</div>
                                    </div>
                                    <div class="news_post_title"><a href="#">Best tips to travel light</a></div>
                                    <div class="news_post_category">
                                        <ul>
                                            <li><a href="#">lifestyle & travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="news_post_text">
                                        <p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit amet mattis.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- News Sidebar -->
                    <div class="col-xl-4">
                        <div class="travello">
                            <div class="background_image" style="background-image:url(images/travello.jpg)"></div>
                            <div class="travello_content">
                                <div class="travello_content_inner">
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="travello_container">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-end">
                                        <span class="travello_title">Get a 20% Discount</span>
                                        <span class="travello_subtitle">Buy Your Vacation Online Now</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include "includes/footer.php"?>