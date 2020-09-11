<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>
<?php ob_start(); ?>

<?php include "includes/navigation.php" ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                    <?php
                                                    if (isset($_POST["submit"])) {
                                                         $image =  $_POST['image'];
                                                         $city_name =  $_POST['city_name'];
                                                         $status =  $_POST['status'];
                                                         $city_price =  $_POST['city_price'];
                                                         $content =  $_POST['content'];
                                                        
                                                         $query = "INSERT INTO place (image, city_name, status, city_price, content) VALUES('{$image}', '{$city_name}', '{$status}', '{$city_price}', '{$content}')";
                                                        
                                                         $create_name_query = mysqli_query($connect, $query);
                                                        
                                                         if (!$create_name_query){
                                                            die("QUERY FAILED". mysqli_error($connect));
                                                         }else {
                                                            header("Location: index.php");
                                                         }
                                                        
                                                        
                                                    }
                                                ?>

                        <form method="post" action="addcity.php">                            
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" name=image>
                            </div>
                            <div class="form-group">
                                <label for="city_name">city_name</label>
                                <input type="text" class="form-control"  name="city_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>draft</option>
                                <option>publish</option>
                                <option>3</option>                                
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city_price">city_price</label>
                                <input type="varchar" class="form-control" name="city_price">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                            </div>
                            <div class="form-group ml-5">
                                    <input class="btn btn-outline-success" type="submit" name="submit" value="Add City">
                                </div>
                        </form>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include "includes/footer.php" ?>
