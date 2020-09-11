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
                    <div class="col-lg-12 col-md-">
                                             
                                <table class="table table-border table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>City Name</th>
                                                <th>Content</th>
                                                <th>City Price</th>
                                                <th>status</th>    
                                            </tr>
                                        </thead>
                                   
                                            <?php
                                 $query = "SELECT * FROM place";
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
                                    
                                        <tbody>
                                        <?php
                                            echo"<tr>"; 
                                            echo"<td>  $id </td>";
                                            echo"<td><img width='100' src='../images/$image' alt='img' > </td>";
                                            echo" <td>   $city_name  </td>";
                                            echo"  <td>   $content  </td>";
                                            echo"  <td>   $city_price </td>";
                                            echo"  <td>   $status </td>";
                                            echo" <td>  <a href='viewallcity.php?delete={$id}'>DELETE</a> </td>";
                                            echo" </tr>"; 

                                              ?>
                                        </tbody>
                                   
                           <?php     }
                            ?>                                  
                                            
                                               

                                    <?php
                                        if(isset($_GET['delete'])){
                                            $the_id = $_GET['delete'];
                                            $query = "DELETE FROM place WHERE id = {$the_id} ";
                                            $delete_query = mysqli_query($connect, $query);
                                            header("LOCATION: viewallcity.php");
                                        }

                                            ?>
                                </table>
                       
                        
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