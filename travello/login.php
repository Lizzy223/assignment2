<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php include "includes/navigation.php" ?>

        <!-- Home -->

        <div class="home">
        <?php  
       
			if (isset($_POST["submit"])) {
				$email = $_POST["email"];
				$password = $_POST["password"];
                
                $email = mysqli_real_escape_string($connect, $email);
                $password = mysqli_real_escape_string($connect, $password);

            $query = " SELECT * FROM sign_up WHERE email = '{$email}'";
            $select_login_query = mysqli_query($connect, $query);

            if (!$select_login_query){
                die("QUERY FAILED". mysqli_error($connect));
            }

            while($row = mysqli_fetch_array($select_login_query)){
               $db_id = $row['id'];
               $db_name = $row['name'];
               $db_email = $row['email'];
               $db_password = $row['password'];
            }
            if ($email !== $db_email && $password !== $db_password) {
                header("Location: index.php");
            } elseif ($email === $db_email && $password === $db_password){
                
                $_SESSION['email'] = $db_email;
                $_SESSION['name'] = $db_name;
                
                
                header("Location: login2.php");
            }

            }
		?>
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
                                                <div class="col-md-6 mx-auto mt-5 p-3 class" style="width: 50%;">
                                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                                        <div class="form-group">
                                                            <label for="email" style="color: black;">Email address:</label>
                                                            <input type="email" name="email" class="form-control" id="email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd" style="color: black;">Password:</label>
                                                            <input type="password" name="password" class="form-control" id="pwd" required>
                                                        </div>

                                                        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                                                        
                                                    </form>
                                                    <hr>
                                                    <small class="mr-5" style="color: black;">Don't have an account yet, <a href="signup.php" class="btn btn-primary">Sign Up</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Footer -->

                <?php include "includes/footer.php"?>