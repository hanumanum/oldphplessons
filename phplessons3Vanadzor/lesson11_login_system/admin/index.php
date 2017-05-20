<?php
    require_once("../config.php");
    require_once("functions.php");
    if(!isLoggedIn())
    {
        redirect();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("template/head.php"); ?>

<body>
    <?php include("template/nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <?php
                    if(mysqli_connect_errno($link) == NULL)
                    {

                        $sql = "SELECT * 
                                FROM blog 
                                ORDER BY datecreated DESC 
                                LIMIT 0,10"; 
                        $result = mysqli_query($link,$sql);     
                        
                        if($result)
                        {
                            ?>
                            <table class="table" id="articlesTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php
                            while($article = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
                            {
                                echo "<tr>";
                                $id=$article["id"];
                                $title=$article["title"];
                                $date=$article["datecreated"];                                
                                echo "<td>".$id."</td>";
                                echo "<td>".$title."</td>";
                                echo "<td>".$date."</td>";
                                echo "<td><a href='edit.php?id=$id' class='btn btn-info' role='button'>Edit</a></td>";
                                echo "<td><a href='delete.php?id=$id' class='btn btn-danger' role='button'>DELETE</a></td>";

                                echo "</tr>";
                            }

                            ?>
                            
                            </table>

                            <?php
                        }
                        else
                        {
                            echo mysqli_error($link);   
                            
                        }


                    }
                    else
                    {
                        echo mysqli_connect_error();
                    }
                    
                    mysqli_close($link);
         

                ?>
            

            </div>

    
        </div>
        <!-- /.row -->

        <hr>
    <?php include("template/footer.php"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css">
    <script src="DataTables/media/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#articlesTable').DataTable();
        } );
    </script>

    
</body>

</html>
