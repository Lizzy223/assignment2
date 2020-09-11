<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                                <div class="logo"><a href="index.html">Travello</a></div>
                                <nav class="main_nav">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li class="active"><a href="login2.php">Home</a></li>
                                        <li><a href="about2.php">About us</a></li>                                        
                                        <li><a href="news2.php">News</a></li>
                                        <li><a href="contact2.php">Contact</a></li>
                                        <h5 class="ml-2"><?php  echo 'Hi '.$_SESSION['name'] ?></h5>
                                        <a class="ml-5 btn btn-outline-primary" href="index.php">LogOut</a>
                                    </ul>
                                </nav>


                                <!-- Hamburger -->

                                <div class="hamburger ml-auto">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_social d-flex flex-row align-items-center justify-content-start">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </header>
