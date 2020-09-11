<?php include "includes/db.php"?>
<?php ob_start(); ?>


<?php include "includes/header.php"?>

<?php include "includes/navigation.php"?>
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
                                                <div class="col-md-6 mx-auto  class" style="width: 50%;">
                                                <?php
                                                    if (isset($_POST["submit"])) {
                                                         $name =  $_POST['name'];
                                                         $contact =  $_POST['contact'];
                                                         $email=  $_POST['email'];
                                                         $password =  $_POST['password'];
                                                        
                                                         $query = "INSERT INTO sign_up (name, contact, email, password) VALUES('{$name}', '{$contact}', '{$email}', '{$password}')";
                                                        
                                                         $create_name_query = mysqli_query($connect, $query);
                                                        
                                                         if (!$create_name_query){
                                                            die("QUERY FAILED". mysqli_error($connect));
                                                         }else {
                                                            header("Location: index.php");
                                                         }
                                                        
                                                        
                                                    }
                                                ?>
                                                    <form action="adduser.php" method="post">
                                                        <div class="form-group">
                                                            <label for="name" style="color: white;">Name:</label>
                                                            <input type="text" name="name" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email" style="color: white;">Email address:</label>
                                                            <input type="email" name="email" class="form-control" id="email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact" style="color: white;">Contact:</label>
                                                            <input type="number" name="contact" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd" style="color: white;">Password:</label>
                                                            <input type="password" name="password" class="form-control" id="pwd" required>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                                    </form>

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