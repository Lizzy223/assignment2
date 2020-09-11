<?php include "includes/header.php" ?>
<?php include "includes/db.php" ?>
<?php ob_start(); ?>

<body>

    <div id="wrapper">

<?php ?>
        <!-- Navigation -->
        <?php include "includes/navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View all Admin
                        </h1>
                        <!-- add categorys -->
                        <!-- <div class="col-xs-6">
                            <form action>
                                <div class="form-group">
                                    <label>Category Title</label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-outline-secondary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div> -->
                        <div class="col-xs-6">
                                <table class="table table-border table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                            </tr>
                                        </thead>
                            <?php
                                $query = "SELECT * FROM admin_signin";
                                $select_category = mysqli_query($connect, $query);

                                while($row = mysqli_fetch_assoc($select_category)) {
                                    # code...
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $contact = $row['contact'];
                                    
                                    ?>                                    
                                    
                                        <tbody>
                                        <?php
                                            echo"<tr>"; 
                                            echo"<td>  $id;  </td>";
                                            echo"<td>   $name;  </td>";
                                            echo" <td>   $email;  </td>";
                                            echo"  <td>   $contact;  </td>";
                                            echo" <td>  <a href='viewalladmin.php?delete={$id}'>DELETE</a> </td>";
                                            echo" </tr>"; 

                                              ?>
                                        </tbody>
                                   
                           <?php     }
                            ?>

                           
                                </table>
                                <?php
                                if(isset($_GET['delete'])){
                                    $the_id = $_GET['delete'];
                                    $query = "DELETE FROM admin_signin WHERE id = {$the_id} ";
                                    $delete_query = mysqli_query($connect, $query);
                                    header("LOCATION: viewalladmin.php");
                                }

                                    ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include "includes/footer.php"?>